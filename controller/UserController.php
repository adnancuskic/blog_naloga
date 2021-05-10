<?php
require_once "model/DBInit.php";
require_once "viewHelper.php";


class UserController {

    public static function allUsers() {
        $db = DBInit::getInstance();
        $statement = $db->prepare("SELECT id, ime, priimek, geslo, roles, profile_pic FROM user");
        $statement->execute();
        $users = $statement->fetchAll();
        ViewHelper::render("view/home.php", ["users" => $users]);
        return $users;
    }

    public static function usersPost($id) {
        $db = DBInit::getInstance();
        //$statement = $db->prepare("SELECT kategorijaID, title, date, content, coverPicPath, likes, dislikes FROM objave,user,kategorije WHERE userID == user.id");
        $statement = $db->prepare("SELECT u.id,u.ime,u.priimek,o.title,k.imeKategorije,o.date,o.content,o.coverPicPath, o.likes,o.dislikes FROM user as u LEFT JOIN objave as o ON u.id = o.userID LEFT JOIN kategorije as k ON o.kategorijaID = k.id WHERE o.userID = :id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        $posts = $statement->fetchAll();
        ViewHelper::render("view/userPost.php", ["posts" => $posts]);
        return $posts;

    }

}