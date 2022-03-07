<?php
session_start();
//check if button was clicked
if(isset($_POST["btn_register"])){
    //fetching data from register.php
    $userName=$_POST["u_name"];
    $email=$_POST["u_email"];
    $password=$_POST["u_password"];
    //connectin to the db
    require_once "connection.php";
    //prepare select query to check if username exists
    $checkQuery="SELECT * FROM `users` WHERE username='$userName'";
    //fetch the records from the db
    $returnedUserNames=mysqli_query($connection,$checkQuery);
    //assign the number of rows returned to a variable
    $count=mysqli_num_rows($returnedUserNames);
    //condition to check if username exists
    if($count>0){
        //username exists
        echo "UserName Already Exists";
    }else{
        //username doesn't exist
        $registerQuery="INSERT INTO `Users`(`id`, `username`, `email`, `password`) VALUES (null,'$userName','$email','$password')";
        //save to db
        $save=mysqli_query($connection,$registerQuery);
        //check if save was succesful
        if(isset($save)){
            header(header:"location:login.php");
        }else{
            echo("Registration not Succesful");
        }
    }
}