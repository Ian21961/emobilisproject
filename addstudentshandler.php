<?php
//check if button has been clicked
if(isset($_POST["btn_add"])){
    $studentName = $_POST["name"];
    $studentregistrationNumber=$_POST["studentsIdNumber"];
    $studentsYearOfSturdy=$_POST["YearOfSturdy"];
    $studentGender=$_POST["gender"];
    $studentMeanMark=$_POST["mean mark"];
    $studentGrade=$_POST["grade"];
    require_once "connection.php";
    //prepare query
   $studentsQuery="INSERT INTO ```students`(`id`, `name`, `studentsIdNumber`, `yearOfSturdy`, `gender`, `mean mark`, `grade`)
    VALUES (null,' $studentName','$studentregistrationNumber','$studentsYearOfSturdy','$studentGender','$studentMeanMark','$studentGrade')";
    //saving to database
    $save=mysqli_query($connection,$studentsQuery);
    //check if saved
    if(isset($save)){
        header(header:"location:addstudents.php");
    }else{
        echo "student update failed"; 
    }
}