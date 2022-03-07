<?php
//check if button has been clicked
if(isset($_POST["btn_add"])){
    $studentUpdatedName = $_POST["name"];
    $studentUpdatedregistrationNumber=$_POST["studentsIdNumber"];
    $studentsUpdatedYearOfSturdy=$_POST["YearOfSturdy"];
    $studentUpdatedGender=$_POST["gender"];
    $studentUpdatedMeanMark=$_POST["mean mark"];
    $studentUpdatedGrade=$_POST["grade"];
    require_once "connection.php";
    //prepare query
   $updateQuery="UPDATE `students` SET `id`=null,`name`=' $studentUpdatedName',
   `studentsIdNumber`='$studentUpdatedregistrationNumber',`year`='$studentsUpdatedYearOfSturdy',`gender`='$studentUpdatedGender',
   `mean mark`='$studentUpdatedMeanMark',`grade`='$studentUpdatedGrade' WHERE 1";
    //saving to database
    $save=mysqli_query($connection,updateQuery);
    //check if saved
    if(isset($save)){
        header(header:"location:addstudents.php");
    }else{
        echo "student update failed"; 
    }
}


