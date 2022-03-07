<?php
//check if link has been clicked
//check if button has been clicked
if(isset($_POST["btn_add"])){
    $recievedstudentName = $_POST["name"];
    $receivedstudentregistrationNumber=$_POST["studentsIdNumber"];
    $receivedstudentsYearOfSturdy=$_POST["YearOfSturdy"];
    $receivedstudentGender=$_POST["gender"];
    $recievedstudentMeanMark=$_POST["mean mark"];
    $recievedstudentGrade=$_POST["grade"];
    require_once "connection.php";
    //prepare query
}else{
    //redirect back to voters.php
    header(header:"location:addstudents.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Voter</title>
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
</head>
<body>
   <h1 class="text-info text-center mt-2">Fill Student Marks Here</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="updateHandler.php" method="post">
                <input value="<?php echo "$recivednameStudent";?>" class="form-control" type="text" name="name" placeholder="Students Name"><br><br>
                <input value="<?php echo "$recivedstudentregistrationNumber";?>"  class="form-control" type="" name="studentsIdNumber" id="" placeholder="students Id Number"><br><br>
                <select value="<?php echo "$recivedyearOfStudy";?>"  class="form-control" name="year" id="">
                value="<?php echo "$recivedyearOfStudy";?>"
                    <option value="">Select year of study</option>
                    <option value="">Select year of study</option>
                    <option value="first">first</option>
                    <option value="second">second</option>
                    <option value="third">third</option>
                    <option value="fourth">fourth</option>
                </select><br><br>
                <select value="<?php echo "$recivedstudentGender";?>"  class="form-control" name="gender" id="">
                value="<?php echo "$recivedstudentGender";?>"
                    <option value="gender">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <input value="<?php echo "$recivedstudentMeanMark";?>" type="text" class="form-control" name="mean mark" id="" placeholder="mean mark"><br><br>
                <input value="<?php echo "$recivedstudentGrade";?>"   type="text" class="form-control" name="grade" id="" placeholder="grade"><br><br>
                <input class="btn btn-outline-info btn-block"type="submit" value="update" name="btn_add"><br><br>
                <a class="btn btn-outline-success btn-block" href="edgeclass.php">check updated list</a><br>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>
