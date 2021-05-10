<?php

session_start();
require_once "model/DBInit.php";
require_once("controller/UserController.php");

$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";

$urls = [
    "" => function () {
        UserController::allUsers();
        
    },
    "user" => function (){
        $id = htmlspecialchars($_GET["id"]);
        UserController::usersPost($id);
    },
];

try {
    if (isset($urls[$path])) {
       $urls[$path]();
    } else {
        echo "No controller for '$path'";
    }
} catch (Exception $e) {
    echo "An error occurred: <pre>$e</pre>";
    // ViewHelper::error404();
} 
