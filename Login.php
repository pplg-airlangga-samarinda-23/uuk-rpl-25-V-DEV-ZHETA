<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * from admin WHERE username=? AND password=?";
    $row = $koneksi->execute_query($sql, [$username, $password]) -> fetch_assoc();


    if ($row){
        session_start();
        $_SESSION["Username"] = $row["Username"]; 
        header("Location:DashBoard.php");
    }
    
}
require "Views/Login.view.php";
?>

