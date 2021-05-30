<!-- FETCH RECORD QUERY  -->
<?php
session_start();
if(isset($_SESSION["id"]))
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" />
    <script src="./../bootstrap/js/bootstrap.min.js"></script>
    <script src="./../bootstrap/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="./../css/admin.css" />
    <title>Edit Exam</title>
</head>

<body>

    <?php
if(isset($_GET['examid'])){
    $id = $_GET['examid'];
    include("connection.php");
    $sql = "SELECT * FROM exam WHERE examid = $id";
    $res = $conn->query($sql);
    foreach($res as $row){}
}
?>
    <div class="h1 text-center my-5"><?php echo $row['examName'] ?></div>
    <div class="container justify-content-center bg-secondary d-flex my-5 p-5 ">
        
        <form action="" method="post" id="myForm">
            <label>name</label><input type="text" name="examname" value="<?php echo $row['examName'] ?>" /><br>
            <label>description</label><input type="text" name="description" id="description"
                value="<?php echo $row['examDescription']; ?>" /><br>
            <label for="qualificationLevel">Qualification Level</label>
            <div>
                <select class=" select" name="qualification" id="qualificationLevel" required>
                    <option value="">SELECT Qualification level</option>
                    <option value="Matriculation (10th)">Matriculation (10th)</option>
                    <option value="Higher secondary">Higher secondary</option>
                    <option value="Diploma">Diploma</option>
                    <option value="graduate">graduate</option>
                    <option value="post graduate">post graduate</option>
                    <option value="ph.D ">ph.D</option>
                </select>
            </div><br>
            <label>category percentage</label><input type="text" name="categorypercentage"
                value="<?php echo $row['categoryPercentage']; ?>" /><br>
            <label>available sheets </label><input type="text" name="available_sheets"
                value="<?php echo $row['availableSheets']; ?>"><br>
            <label>start date</label><input type="date" name="start_date"
                value="<?php echo $row['startDateRegistration']  ?>" /><br>
            <label>end Date</label><input type="date" name="end_date"
                value="<?php echo $row['endDateRegistration'] ?>" /><br>
            <input type="submit" name="btn" id="btn" class="w-25" value="Update" /><br>
            <!-- <input type="checkbox" name="checkbox" id="ok" value="check"  /> -->
        </form>
    </div>

    <!-- UPDATE RECORD QUERY -->

    <?php
if(isset($_POST['btn'])){
    require "databaseClass.php";
    require("examClass.php");
    $examObj = new exam();
    $examObj->examUpdate($id, $_POST);
}
?>
<div class="footer fw-bold my-5">
        <div class="bg-secondary text-light text-center py-3 fixed-bottom"><i>
                &copy; 2021 COMPETITIVE. All Rights Reserved.
            </i></div>
    </div>
</body>

</html>
<?php
}
else
{
    header("Location:./");
}
?>
