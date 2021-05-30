<?php
session_start();
if(isset($_SESSION['id']))
{
    header("Location:home.php");
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
                $_SESSION["username"] = $value['username'];
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
            echo '<script>setTimeout(function () { window.location = "home.php"; }, 2000);</script>';
            
        }
        
    }
}
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
    <title>INDEX</title>
</head>
<style>
    .icon img {
        height: 225px;
        width: 225px;
        border: 2px outset coral;
        opacity: .7;
        transition: .3s ease-in-out;
    }

    .icon img:hover {
        opacity: 1;
    }
</style>

<body>

    <section id="header_main">
        <nav class="d-flex justify-content-between w-100 align-items-center bg-success">
            <input type="checkbox" id="nav-toggle">
            <div class="logo"><a href="index.php">Competitive</a></div>
            <ul class="d-flex h2">
                <!-- <li><a href="home.php">Home</a></li> -->
                <li><a href="booklist.php"><i class="fa fa-book"></i>books</a></li>
                <li><a href="examlist.php"><i class="fa fa-list"></i>examList</a></li>
                <li><a href="#"><i class="fa fa-list-alt"></i>Results</a></li>
                <?php   if(isset($_SESSION['username'])){
                    echo '<li><a class="text-warning" href="logout.php">Logout</a></li>';
                }else{
                    echo '<li><a class="text-warning" href="#faq"><i class="fa fa-question-circle"></i>FAQ</a></li>';
                }
                ?>
            </ul>
            <div class="icon-text">
                <label for="nav-toggle">
                    ≡
                </label>
            </div>
        </nav>
    </section>

    <!-- DISPLAY ALL EXAMS FROM EXAM TABLE LOGIN NOT REQUIRED -->
    <section id="exam_main" class=" pt-3">
        <div class="container-fluid">
            <div class="flex-lg-row flex-md-column-reverse flex-sm-column-reverse flex-xs-column-reverse row main-row ">
                <div class="col-md-12  col-lg-3 col-sm-12 sticky-top-md sticky-lg-top sticky-xl-top">
                    <div class="user-login">
                        <div class="container-fluid">
                            <div class="card">
                                <div class="login-form">
                                    <form action="" method="POST">
                                        <div class="card-header">
                                            <div class="h1 fw-light">User Login</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-form">
                                                <input type="text" name="uname" id="uname"
                                                    placeholder="Enter Your Username">
                                            </div>
                                            <div class="input-form">
                                                <input type="password" id="upass" name="upass" placeholder="Password">
                                            </div>
                                            <div class="input-form">
                                                <input class="input1" id="login" type="submit" name="click"
                                                    value="Login">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row text-center">
                        <div class="row py-3 my-5 ">
                            <div class="icon">
                                <img src="./image/goverment.png" />
                            </div>
                        </div>
                        <div class="row py-3 my-5 text">
                            <div class="icon">
                                <img src="./image/ce2.jpg" />
                            </div>
                        </div>
                        <div class="row py-3 my-5 text">
                            <div class="icon">
                                <img src="./image/book1.jpg" />
                            </div>
                        </div>
                        <div class="row py-3 my-5 text">
                            <div class="icon">
                                <img src="./image/book2.jpg" />
                            </div>
                        </div>
                        <div class="row py-3 my-5 text">
                            <div class="icon">
                                <img src="./image/ce1.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 col-sm-12">
                    <div class="container bg-light py-2">
                        <div class="card-header font-weight-bold bg-success px-5 py-2 h3 text-light">LATEST NEWS</div>
                    </div>
                    <div class="card-body right-card bg-light p-3">
                        <?php
                        require "./admin/databaseClass.php";
                        require "./admin/examClass.php";
                        $examObj = new Exam();
                        $data = $examObj->examList();
                        foreach($data as $value){
                            ?>
                        <div class="container shadow px-5 py-3 my-5">
                            <div class="exam-heading d-flex justify-content-end py-3">
                                <div class="name text-warning">Date :
                                    <?php echo $value["createDate"]; ?>
                                </div>
                            </div>
                            <div class="exam-details">
                                <div class="description">
                                    <?php echo substr($value["examDescription"], 0, 500); ?>...
                                </div>
                            </div>
                            <div class="more-info">
                                <div class="more-btn d-flex justify-content-between my-4 align-items-center">
                                    <div class="details h5"><a href="exams_details.php?bookid=<?php echo $value["
                                            examid"]; ?>">&#9432;&nbsp; MoreInfo</a></div>
                                    <div class="text-danger">Registration required</div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        require "./admin/bookClass.php";
                        $bookObj = new Book();
                        $data = $bookObj->bookList();
                        foreach($data as $value){
                            ?>
                        <div class="container shadow px-5 py-3 my-5">
                            <div class="exam-heading d-flex justify-content-end py-3">
                                <div class="name text-warning">Date :
                                    <?php echo $value["bookIssueDate"]; ?>
                                </div>
                            </div>
                            <div class="exam-details">
                                <div class="description">
                                    <?php echo substr($value["bookDescription"], 0, 250); ?>...
                                </div>
                            </div>
                            <div class="more-info">
                                <div class="more-btn d-flex justify-content-between my-4 align-items-center">
                                    <div class="h5">Book Name :
                                        <?php echo $value["bookName"]; ?>
                                    </div>
                                    <div class="details h5 bg-light text-success">NEW AVAILABLE</a></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>

                                </div>
                                <div class="start-date text-end my-2">
                                    <div class="text-start">
                                        <a target="_blank" href="./upload/<?php echo $value[" fileName"]; ?>">
                                            <button class="btn btn-block btn-success px-3 ">DOWNLOAD NOW <span
                                                    class="bg-light text-dark rounded px-2 mx-2">↓</span></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <section id="faq" class="bg-light my-5 py-3">
                        <div class="container">
                            <div class="row row-cols-2 text-justify">
                                <div class="col bg-success text-light border-end text-center p-3 h4">Question</div>
                                <div class="col bg-success text-light border-start text-center p-3 h4">Answer</div>
                                <?php
                                    $data = $examObj->faq();
                                    foreach($data as $row){
                                        ?>
                                <div class="col p-3 border border-info">
                                    <?php echo $row["question"]; ?>
                                </div>
                                <div class="col p-3 border border-info">
                                    <?php echo $row["answer"]; ?>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="my-3" id="op"></div>
                        <div class="row px-4 mt-4">
                            <input type="text" id="question" class="w-100 py-2" name="question"
                                placeholder="Ask any question..." />
                            <input type="submit" class="w-25 py-2 my-1" id="faqbtn" name="faqbtn" />
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <div class="footer fw-bold bg-dark text-light py-2">
        <div class="rights text-center my-3"><i>
                &copy; 2021 COMPETITIVE. All Rights Reserved.
            </i></div>
        <script>
            $(document).ready(function () {
                $("#uname").focus();
                $("#faqbtn").on('click', function () {
                    var question = document.getElementById("question").value;
                    if (!question.length) {
                        document.getElementById("op").innerHTML = '<span class="text-danger px-3">Type Something...</span>';
                        document.getElementById("question").focus();
                    } else {
                        $.ajax(
                            {
                                type: 'POST',
                                url: 'faq.php',
                                data: { 'faq': question },
                                success: function (res) {
                                    $('#op').html(res);
                                    document.getElementById("question").value = '';
                                    alert("Thanks for response !");
                                }
                            });
                    }
                });
            });
        </script>

</body>

</html>