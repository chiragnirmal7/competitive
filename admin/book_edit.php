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
    <title>Edit Book</title>
</head>
<style>
    #description {
        padding: 20px 0 !important;
    }
</style>

<body>

<?php
    if(isset($_GET['bookid'])){
        require "databaseClass.php";
        require "bookClass.php";
        $id = $_GET['bookid'];
        $bookObj = new Book();
        $row = $bookObj->bookListById($id);
}
?>
    <div class="h1 text-center my-5">
        <?php echo $row['bookName'] ?>
    </div>
    <div class="container justify-content-center bg-secondary d-flex my-5 p-5 ">
        <form action="" method="post" id="myForm">
            <label>Issue Date</label><input type="text" name="des" id="issueDate"
                value="<?php echo $row['bookIssueDate']; ?>" disabled />
            <label>Last Update</label><input type="text" name="des" id="lastDate"
                value="<?php echo $row['last_update']; ?>" disabled />
            <label>Description</label><input type="text" name="des" id="description"
                value="<?php echo $row['bookDescription']; ?>" />
            <input type="submit" name="btn" id="btn" class="w-25" value="Update" />
        </form>
    </div>
</body>

</html>

<?php


if(isset($_POST['btn'])){
    // require("bookClass.php");
    $obj = new Book();
    $obj->bookUpdate($id, $_POST);
    // echo '<script>document.getElementById("description").value = "";</script>';
}
}
else{
    header("Location:index.php");
}
?>

<!-- PANDING DESIGNING -->