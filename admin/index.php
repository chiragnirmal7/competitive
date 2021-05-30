<?php
session_start();
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
    <title>ADMIN</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 11.5px;
        letter-spacing: 1px;
    }

    body {
        background-image: url('./../image/body.jpg');
    }

    input {
        width: 90%;
    }

    a:hover {
        color: blue;
    }

    .main-login-form {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-form {
        width: 50vw;
        height: 40vh;
    }

    .login-form input {
        width: 50% !important;
        padding: 10px;
        margin: 3px 0;
    }

    .input1 {
        margin: 20px 0 !important;
    }

    #admin {
        animation: abcd 1.5s ease-in-out infinite;
        color: cyan !important;
    }

    @keyframes abcd {
        0% {
            opacity: 1;
            color: red !important;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>
<?php
if(isset($_SESSION["id"]))
{
    if(isset($_POST['logout']))
    {        
        unset($_SESSION["id"]);
        unset($_SESSION["username"]);
        echo '<p class="alert alert-warning text-center">Please Wait...</p>';
        echo '<script>setTimeout(function () { window.location = "index.php"; }, 2000);</script>';
    }
?>

<body>

    <form method="POST" class="text-end bg-secondary d-flex justify-content-between ">
        <div id="admin" class="mx-3 rounded text-dark text-end my-2 px-4 border-0">ADMIN</div>
        <button type="submit" name="logout" class="mx-3 bg-transparent text-white text-end my-2 px-4 border-0">
            Logout
        </button>
    </form>
    <div class="container-fluid pt-3 pb-2 rounded align-items-center" id="navbar"
        style="background-color: cornflowerblue;">
        <div class="d-flex bd-highlight h5 justify-content-center">
            <button class="mx-3 bg-transparent text-white my-2 px-4 border-0" id="book-btn">BOOK</button>
            <button class="mx-3 bg-transparent text-white text-primary my-2 px-4 border-0" id="exam-btn">EXAM</button>
            <button class="mx-3 bg-transparent text-white text-primary my-2 px-4 border-0" id="user-btn">USER</button>
            <button class="mx-3 bg-transparent text-white text-primary my-2 px-4 border-0" id="all-btn">SHOW
                ALL</button>
            <!-- <div class="me-auto p-2 bd-highlight"><a href="#" class="text-light">
                    <button class="mx-3 bg-transparent fw-bold text-warning px-5 border-0" id="admin-btn"
                        style="font-size:large;">ADMIN</button>
                </a></div>  -->
        </div>
    </div>
    <div class="container-fluid mb-2 pt-2 pb-1 rounded align-items-center" id="navbar"
        style="background-color: #6c757d!important;">
        <div class="d-flex bd-highlight mb-2 h5 justify-content-center">
            <button class="bg-transparent text-white text-primary border-0" id="nav-text">Hide-Links</button>
        </div>
    </div>
    <script>

    </script>


    <section id="exam">
        <div class="container-fluid">

        </div>
        <div class="container-fluid shadow-lg">
            <div class="card">
                <div class="header p-3 bg-primary h4 align-items-center d-flex justify-content-between">
                    <div class="text-light px-3 py-2 rounded">EXAM LIST</div>
                    <div><a href="exam_insert.php"><button name="sbmtbtn" class="btn btn-lg bg-light text-primary"
                                id="IE">ADD EXAM</button></a></div>
                </div>
            </div>

            <table class="table bg-light text-start table-striped table-hover table-bordered border-primary">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th scope="col">Exam Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Start Registration Date</th>
                        <th scope="col" class="text-center">Edit</th>
                        <th scope="col" class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                include("connection.php");
                $sql = "select * from exam";
                $res = $conn->query($sql);
                foreach($res as $row){
            ?>
                    <tr>
                        <th class="text-center" scope="row">
                            <?php echo $row['examid']; ?>
                        </th>
                        <td>
                            <?php echo $row['examName']; ?>
                        </td>
                        <td>
                            <?php echo substr($row['examDescription'], 0, 100); ?>...
                        </td>
                        <td>
                            <?php echo $row['startDateRegistration']; ?>
                        </td>
                        <td class="text-center"><a href="exam_edit.php?examid=<?php echo $row[0]; ?>"><button
                                    name="sbmtbtn" class="btn btn-sm bg-warning text-light" id="update"><input
                                        type="hidden" class="test" id="editid" value="'. $row[0].'">Edit</button></a>
                        </td>
                        <td class="text-center"><a href="index.php?examid=<?php echo $row[0]; ?>"><button name="sbmtbtn"
                                    class="btn btn-sm bg-danger text-light" id="delete">Delete</button></a></td>
                        <?php
                            if(isset($_GET['examid']) && !empty($_GET['examid']))
                            {
                                require("databaseClass.php");
                                require("examClass.php");
                                $obj = new Exam();
                                $id = $_GET['examid'];
                                $obj->examDelete($id);
                            }
                        ?>
                    </tr>
                    <?php
}
?>
                </tbody>
            </table>
        </div>
        <div class="my-5 "></div>
    </section>
    <section id="book">
        <div class="container-fluid shadow-lg">
            <div class="card">
                <div class="header p-3 bg-primary h4 align-items-center d-flex justify-content-between">
                    <div class="text-light px-3 py-2 rounded">BOOK LIST</div>
                    <div><a href="book_insert.php"><button name="sbmtbtn" class="btn btn-lg bg-light text-primary"
                                id="IE">ADD BOOKS</button></a></div>
                </div>
            </div>
            <table class="table bg-light text-start table-striped table-hover table-bordered border-primary">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Book Issue Date</th>
                        <th scope="col" class="text-center">Edit</th>
                        <th scope="col" class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sql = "select * from books";
                $res = $conn->query($sql);
                foreach($res as $row){
            ?>
                    <tr>
                        <th class="text-center" scope="row">
                            <?php echo $row['bookId']; ?>
                        </th>
                        <td>
                            <?php echo $row['bookName']; ?>
                        </td>
                        <td>
                            <?php echo substr($row['bookDescription'], 0, 100); ?> ...
                        </td>
                        <td>
                            <?php echo $row['bookIssueDate']; ?>
                        </td>
                        <td class="text-center"><a href="book_edit.php?bookid=<?php echo $row[0]; ?>"><button
                                    name="sbmtbtn" class="btn btn-sm bg-warning text-light" id="update"><input
                                        type="hidden" class="test" id="editid" value="'. $row[0].'">Edit</button></a>
                        </td>
                        <td class="text-center"><a href="index.php?bookid=<?php echo $row[0]; ?>"><button name="sbmtbtn"
                                    class="btn btn-sm bg-danger text-light" id="delete">Delete</button></a></td>
                        <?php
                                if(isset($_GET['bookid']) && !empty($_GET['bookid']))
                                {
                                    require("databaseClass.php");
                                    require("bookClass.php");
                                    $obj = new Book();
                                    $id = $_GET['bookid'];
                                    $obj->bookDelete($id);
                                }
                            ?>
                    </tr>
                    <?php
            }
            ?>
                </tbody>
            </table>
        </div>
        <div class="my-5 "></div>
    </section>
    <section id="user">
        <div class="container-fluid shadow-lg py-3">
            <div class="card">
                <div class="header p-3 bg-primary h4 align-items-center d-flex justify-content-between">
                    <div class="text-light px-3 rounded">USER LIST</div>
                    <!-- <div><button name="sbmtbtn" class="btn btn-lg bg-light text-primary" id="getuser">USER
                            ACTIVITY</button></div> -->
                </div>
            </div>
            <table class="table bg-light text-start table-striped table-hover table-bordered border-primary">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">State</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col" class="text-center">Edit</th>
                        <th scope="col" class="text-center">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sql = "select * from user";
                $res = $conn->query($sql);
                foreach($res as $row){
            ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $row['userid']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['qualification']; ?>
                        </td>
                        <td>
                            <?php echo $row['birthdate']; ?>
                        </td>
                        <td>
                            <?php echo $row['state']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['phone']; ?>
                        </td>
                        <td class="text-center"><a href="user_edit.php?userid=<?php echo $row[0]; ?>"><button
                                    name="sbmtbtn" class="btn btn-sm bg-warning text-light" id="update"><input
                                        type="hidden" class="test" id="editid" value="'. $row[0].'">Edit</button></a>
                        </td>
                        <td class="text-center"><a href="index.php?userid=<?php echo $row[0]; ?>"><button name="sbmtbtn"
                                    class="btn btn-sm bg-danger text-light" id="delete">Delete</button></a></td>
                        <?php
                            if(isset($_GET['userid']) && !empty($_GET['userid']))
                            {
                                require_once("databaseClass.php");
                                require_once("userClass.php");
                                $obj = new User();
                                $id = $_GET['userid'];
                                $obj->userDelete($id);
                                
                            }
                        ?>

                    </tr>
                    <?php
            }
            ?>
                </tbody>
            </table>
        </div>



        <section id="activity" class="my-5 shadow-lg">
            <div class="container-fluid shadow-lg py-3">
                <div class="card">
                    <div class="header p-3 bg-primary h4 align-items-center d-flex justify-content-between">
                        <div class="text-light px-3 py-2 rounded">NEW USER LIST</div>
                        <!-- <div><button name="sbmtbtn" class="btn btn-lg bg-light text-primary" id="getuser">USER
                                ACTIVITY</button></div> -->
                    </div>
                </div>
                <table class="table bg-light text-start table-striped table-hover table-bordered border-primary">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NEW USER</th>
                            <th scope="col">QUALIFICATION</th>
                            <th scope="col">LAST UPDATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $sql = "SELECT username, qualification, lastupdate FROM user";
                $res = $conn->query($sql);
                foreach($res as $userupdate){
                ?>
                        <tr class="text-center">
                            <td>
                                <?php echo $userupdate["username"]; ?>
                            </td>
                            <td>
                                <?php echo $userupdate["qualification"]; ?>
                            </td>
                            <td>
                                <?php echo $userupdate["lastupdate"]; ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
                </table>
            </div>

            <div class="container-fluid shadow-lg py-3">
                <div class="card">
                    <div class="header p-3 bg-primary h4 align-items-center d-flex justify-content-between">
                        <div class="text-light px-3 py-2 rounded">FREQUENTLY ASKED QUESTIONS</div>
                        <!-- <div><button name="sbmtbtn" class="btn btn-lg bg-light text-primary" id="getuser">USER
                                ACTIVITY</button></div> -->
                    </div>
                </div>
                <table class="table bg-light text-start table-striped table-hover table-bordered border-primary">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">QUESTION</th>
                            <th scope="col">ANSWER</th>
                            <th scope="col">DATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $sql2 = "SELECT question, answer, qDate FROM faq WHERE answer != ''";
                    $res = $conn->query($sql2);
                    foreach($res as $faqupdate){
                ?>
                        <tr class="text-center">
                            <td>
                                <?php echo $faqupdate["question"]; ?>
                            </td>
                            <td>
                                <?php echo $faqupdate["answer"]; ?>
                            </td>
                            <td class="w-25">
                                <?php echo $faqupdate["qDate"]; ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
                </table>
            </div>
            </div>

        </section>

    </section>
    <div class="footer fw-bold my-5">
        <div class="bg-secondary text-light text-center py-3 fixed-bottom"><i>
                &copy; 2021 COMPETITIVE. All Rights Reserved.
            </i></div>
    </div>
        <script>
            $(document).ready(function () {
                $("#user").hide();
                $("#exam").hide();
                $("#book-btn").click(function () {
                    $("#book").fadeIn(500);
                    $("#exam").hide();
                    $("#user").hide();
                });
                $("#exam-btn").click(function () {
                    $("#exam").fadeIn(500);
                    $("#user").hide();
                    $("#book").hide();
                });
                $("#user-btn").click(function () {
                    $("#user").fadeIn(500);
                    $("#book").fadeOut();
                    $("#exam").hide();
                });
                $("#all-btn").click(function () {
                    $("#user").fadeIn(500);
                    $("#book").fadeIn(1000);
                    $("#exam").fadeIn(1500);
                });
                $("#getuser").click(function () {
                    $("#activity").toggle(1000);
                });
                $("#nav-text").click(function () {
                    if ($("#nav-text").text() == "Show-Links") {
                        $("#navbar").fadeIn(200);
                        $("#nav-text").text("Hide-Links");
                    }
                    else {
                        $("#navbar").fadeOut(200);
                        $("#nav-text").text("Show-Links");
                    }
                });
            });
        </script>
</body>
<!-- $('#some-id').trigger('click'); -->
<?php
    }
    else
    {
        if(isset($_POST['click']))
    {
        include("connection.php");
        $username=$_POST['uname'];
        $userpassword=$_POST['upass'];
        $sql="SELECT * FROM user WHERE loginid ='$username' AND password ='$userpassword'";
        $res =$conn->query($sql);
        $result=$res->rowcount();

        if($result==1)
        {  
            $var=$res->fetchall();
            foreach($var as $value)
            {
                $_SESSION["id"] = $value['userid'];
                // $_SESSION["pass"] = $userpassword;
                $_SESSION["username"] = time();
            }
        }
        else if(($username == '') || ($userpassword == ''))
        {
            $msg = '<p class="alert alert-danger">Username / Password Required.</p>';
        }
        else
        {
            $msg = '<p class="alert alert-warning">Username / Password Invalid.</p>';
        }
        if(isset($msg))
        {
            echo $msg;
        }
        if(isset($_SESSION["username"]))
        {   
            echo '<p class="alert alert-success text-center">Success</p>';
            echo '<script>setTimeout(function () { window.location = "index.php"; }, 2000);</script>';
            
        }
        
    }
        ?>
<div class="container-fluid text-center w-50 main-login-form">
    <div class="card">
        <div class="login-form">
            <form action="" method="POST">
                <div class="card-header">
                    <div class="h1 fw-light">Admin Login</div>
                </div>
                <div class="card-body">
                    <div class="input-form">
                        <input type="text" name="uname" id="uname" placeholder="Enter Your Username">
                    </div>
                    <div class="input-form">
                        <input type="password" id="upass" name="upass" placeholder="Password">
                    </div>
                    <div class="input-form">
                        <input class="input1" id="login" type="submit" name="click" value="Login">
                    </div>
                    <a href="#" style="margin: 0 70px">New User ?</a>
                    <a href="#" style="margin: 0 70px">Forget Password </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
        // echo '<script>alert("Set Login Page");</script>';        
    }
?>

</html>