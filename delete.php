<?php
//check if link has been clicked
if (isset($_GET["s_id"])){
    //get the id
    $voterId=$_GET["s_id"];
    //connect to database
    require_once "connection.php";
    //prepare delete query
    $deleteQuery="DELETE FROM `students` WHERE id=null";
    //delete the record from db
    $delete=mysqli_query($connection,$deleteQuery);
    //check if record has been deleted
    if (isset($delete)){
        header(header:"location:Home.php");
    }else{
        die("Record Deletion Failed");
    }
}