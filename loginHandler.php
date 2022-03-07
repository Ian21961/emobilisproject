<?php
session_start();
//check if button has been clicked
if(isset($_POST["btn_login"])){
    //fetch data from db
    $userName=$_POST["u_name"];
    $password=$_POST["u_password"];
    //connect to db
    require_once "connection.php";
    //prepare select query
    $selectQuery="SELECT * FROM `users` WHERE username='$userName' AND password='$password'";
    //fetch authenticated user
    $authUser=mysqli_query($connection,$selectQuery);
    //count rows returned
    $count=mysqli_num_rows($authUser);
    //check if any user was returned
    if($count>0){
        $_SESSION["username"]=$userName;
        header(header:"location:voters.php");
    }else{
        header(header:"location:login.php");
    }
}