<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>CHANGE PASSWORD</title>
</head>
<?php
if(isset($_SESSION['id'])){ 
    ?>
<body>
    <?php include "navbar.php" ?>
    <section id="exam_main" class=" pt-3" style="min-height: 80vh;">
        <div class="container-fluid d-flex justify-content-center my-5 py-5">
            <div class="card w-75">
                <div class="login-form">
                    <form action="" method="POST">
                        <div class="card-header">
                            <div class="h1 fw-light">Change Password</div>
                        </div>
                        <div class="card-body">
                            <div class="input-form">
                                <input type="password" name="opass" id="opass" placeholder="Enter Old Password"
                                    required oninvalid="this.setCustomValidity('Please Enter Old Password')"/>
                            </div>
                            <div class="input-form">
                                <input type="password" id="upass" name="upass" placeholder="Enter New Password"
                                    required oninvalid="this.setCustomValidity('Please Enter New Password')"/>
                            </div>
                            <div class="input-form">
                                <input type="password" id="cpass" name="cpass" placeholder="Confirm Password"
                                    required oninvalid="this.setCustomValidity('Re-Enter Old Password')"/>
                            </div>
                            <div class="input-form">
                                <input class="input1" id="login" type="submit" name="click" value="Proceed To Change">
                            </div>
                        </div>
                        <div class="card-footer text-center text-danger text-uppercase">
                            Do not share your id - password with anyone
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include"footer.php"; ?>
</body>
<?php
}
else
{
    header("Location:index.php");
}
if(isset($_POST['click'])){
    require "./admin/databaseClass.php";
    require "./admin/userClass.php";
    $id = $_SESSION['id'];
    $userObj = new User();
    $userObj->changePassword($id, $_POST);
}

?>
</html>

