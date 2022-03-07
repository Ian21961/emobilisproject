
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
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
            <form action="addstudentshandler.php" method="post">
                <input class="form-control" type="text" name="name" placeholder="Students Name"><br><br>
                <input class="form-control" type="" name="studentsIdNumber" id="" placeholder="students Id Number"><br><br>
                <select class="form-control" name="year" id="">
                    <option value="">Select year of study</option>
                    <option value="first">first</option>
                    <option value="second">second</option>
                    <option value="third">third</option>
                    <option value="fourth">fourth</option>
                </select><br><br>
                <select class="form-control" name="gender" id="">
                    <option value="gender">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br><br>
                <input type="text" class="form-control" name="mean mark" id="" placeholder="mean mark"><br><br>
                <input type="text" class="form-control" name="grade" id="" placeholder="grade"><br><br>
                <input class="btn btn-outline-info btn-block"type="submit" value="Add" name="btn_add"><br><br>
                <a class="btn btn-outline-success btn-block" href="edgeclass.php">chek list</a><br>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>