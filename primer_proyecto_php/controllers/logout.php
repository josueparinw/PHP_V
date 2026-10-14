<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    session_destroy();
    header("Location: ./login.php");
    exit();
}

if (!isset($_SESSION["user_logged"])){
    header("Location: ./login.php");
    exit();
}

?>

