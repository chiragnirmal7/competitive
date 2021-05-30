<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- REQUIRED LINKS -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- REQUIRED LINKS OVER -->
    <title>HOME</title>
</head>
<style>
    th {
        border: 2px inset whitesmoke;
        padding: 10px 5px;
        color: whitesmoke;
        text-transform: capitalize;
    }

    td {
        padding: 5px;
        border: 2px inset whitesmoke;
    }

    @media (max-width: 800px) {

        #btn-news,
        #btn-profile,
        #btn-book,
        #btn-application {
            font-size: xx-small !important;
            align-items: center;
        }
    }

    @media (max-width: 700px) {
        .nameUser {
            font-size: 14px !important;
        }
    }
</style>
<?php
  if(isset($_SESSION["username"])) {
    include("connection.php");
  ?>

<body>

    <section id="header_main">
        <nav class="d-flex justify-content-between w-100 align-items-center bg-success">
            <input type="checkbox" id="nav-toggle">
            <div class="logo"><a href="index.php">Competitive</a></div>
            <ul class="d-flex h2">
                <li><a class="text-warning" href="home.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="booklist.php"><i class="fa fa-book"></i>books</a></li>
                <li><a href="examlist.php"><i class="fa fa-list"></i>examList</a></li>
                <li><a href="updates.php"><i class="fa fa-calendar"></i>updates</a></li>
            </ul>
            <div class="icon-text">
                <label for="nav-toggle">
                    ≡
                </label>
            </div>
        </nav>
    </section>

    <!-- FETCH USER DATEBASE -->

    <?php
        require "./admin/databaseClass.php";
        require "./admin/userClass.php";
        require "./admin/examClass.php";
        require "./admin/bookClass.php";
        $id = $_SESSION["id"];
        $selectUserObj = new User();
        $user = $selectUserObj->userDataById($id);
    ?>

    <!-- USER DATABASE OVER -->


    <!-- LOGOUT -->

    <section>
        <div class="container-fluid bg-primary">
            <div class="d-flex bd-highlight my-3 mx-5 align-items-center text-light">
                <div class="me-auto p-2 bd-highlight h3 nameUser">
                    <?php echo $user['username']. " " . $user['fathername']. " " . $user['lastname']; ?>
                </div>
                <div class="p-2 "><a class="text-light" href="changepass.php">Change Password</a></div>
                <div class="p-2"><a class="text-light mx-5" href="logout.php">- Logout</a></div>
            </div>
        </div>
    </section>

    <!-- LOGOUT OVER-->


    <!-- PROFILE DETAILS TOGGLE  -->

    <section id="profile-status">
        <div class="container">
            <div class="profile-header row bg-primary d-flex justify-content-around text-center blockquote my-3">
                <div class="news-div col border-end p-2">
                    <button class="btn-lg bg-transparent text-light border-0" id="btn-news">Latest News</button>
                </div>
                <div class="profile-div col border-end p-2">
                    <button class="btn-lg bg-transparent text-light border-0" id="btn-profile">Profile
                        Modification</button>
                </div>
                <div class="book-div col border-end p-2">
                    <button class="btn-lg bg-transparent text-light border-0" id="btn-book">Related Books</button>
                </div>
                <div class="application-div col border-end p-2">
                    <button class="btn-lg bg-transparent text-light border-0" id="btn-application">Applicatoin
                        History</button>
                </div>
            </div>
        </div>
    </section>

    <!-- PROFILE DETAILS TOGGLE OVER -->


    <!-- DISPLAY ALL USER DETAILS -->

    <section id="latest-main" class=" pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-sm-12">
                    <div class="container bg-light py-2">
                        <div class="card-header font-weight-bold bg-success px-5 py-2 h3 text-light">LATEST NEWS</div>
                    </div>
                    <div class="card-body bg-light p-3">
                        <?php
                        $examObj = new Exam();
                        $returnData = $examObj->examList();
                        foreach($returnData as $value){
                            ?>
                        <div class="container shadow px-5 py-3 my-5">
                            <div class="more-info">
                                <div class="more-btn d-flex justify-content-between my-4 align-items-center">
                                    <div class="description h4">
                                        <?php echo $value["examName"]; ?>
                                    </div>
                                    <div class="name text-warning"><i class="fa fa-calendar"></i> Date :
                                        <?php echo $value["createDate"]; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="exam-details">

                            </div>
                            <div class="exam-heading d-flex justify-content-end py-2">

                            </div>
                            <div class="exam-details">
                                <div class="description">
                                    <?php echo substr($value["examDescription"], 0, 500); ?>...
                                </div>
                            </div>
                            <div class="more-info">
                                <div class="more-btn d-flex justify-content-end my-4 align-items-center">
                                    <div class="details h5"><a href="exams_details.php?bookid=<?php echo $value["
                                            examid"]; ?>">&#9432;&nbsp; MoreInfo</a></div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profile-main" class=" pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-sm-12">
                    <div class="container bg-light py-2">
                        <div class="card-header font-weight-bold bg-success px-5 py-2 h3 text-light">EDIT PROFILE</div>
                    </div>
                    <div class="card-body bg-light p-3">
                        <div class="container text-end">
                            <div class="d-flex justify-content-end my-3">
                                <h4 class="h6 text-warning ">EDIT</h4>
                                <input type="checkbox" id="editProfile" style="width:initial;margin-left:15px;" />
                            </div>
                        </div>
                        <div class="container justify-content-center bg-secondary d-flex my-5 p-5">
                            <form action="" method="post" id="myForm">

                                <input type="hidden" class="pointer" name="userid" id="userid"
                                    value="<?php echo $user['userid']  ?>">
                                <label>username</label><input type="text" name="username"
                                    value="<?php echo $user['username'] ?>" /><br>
                                <label>lastname</label><input type="text" name="lastname"
                                    value="<?php echo $user['lastname'] ?>" /><br>
                                <label>fathername</label><input type="text" name="fathername"
                                    value="<?php echo $user['fathername'] ?>" /><br>
                                <label>mothername</label><input type="text" name="mothername"
                                    value="<?php echo $user['mothername'] ?>" /><br>
                                <label>birth date</label><input type="date" name="birthdate"
                                    value="<?php echo $user['birthdate']  ?>" /><br>
                                <br>
                                <label>Gender</label> <input type="text" name="gender"
                                    value="<?php echo $user['gender']; ?>" disabled /><br>

                                <div>
                                    <label for="state">State</label>
                                    <div>
                                        <select class=" select" id="state" name="state">
                                            <option value="<?php echo $user['state'] ?>">
                                                <?php echo $user['state'] ?>
                                            </option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="New Delhi">New Delhi</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label for="city">City</label>
                                    <div>
                                        <select class=" select" id="city" name="city">
                                            <option value="<?php echo $user['city'] ?>">
                                                <?php echo $user['city'] ?>
                                            </option>
                                            <option value="RAJKOT">RAJKOT</option>
                                            <option value="NOIDA">NOIDA</option>
                                            <option value="JAIPUR">JAIPUR</option>
                                            <option value="LUDHIANA">LUDHIANA</option>
                                            <option value="PUNE">PUNE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="user-select-none">
                                    <label>Exam Board</label> <input type="text" name="examboard"
                                        value="<?php echo $user['examboard']; ?>" disabled /><br>
                                    <label>Passing year</label> <input type="text" name="passyear"
                                        value="<?php echo $user['passingyear']; ?>" disabled /><br>
                                    <label>Roll no </label><input type="text" name="rollno"
                                        value="<?php echo $user['rollno']; ?>" disabled /><br>
                                </div>

                                <label for="qualificationLevel">Qualification Level</label>
                                <div>
                                    <select class="pointer" name="qualification" id="qualificationLevel">
                                        <option value="<?php echo $user['qualification'] ?>">
                                            <?php echo $user['qualification'] ?>
                                        </option>
                                        <option value="Matriculation (10th)">Matriculation (10th)</option>
                                        <option value="Higher secondary">Higher secondary</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="graduate">graduate</option>
                                        <option value="post graduate">post graduate</option>
                                        <option value="ph.D ">ph.D</option>
                                    </select>
                                </div><br>

                                <label>email </label><input type="email" name="email"
                                    value="<?php echo $user['email']; ?>" /><br>
                                <label>Phone no </label><input type="tel" name="pnoneno"
                                    value="<?php echo $user['phone']; ?>" /><br>
                                <label>Address</label><input type="text" name="address" id="address"
                                    value="<?php echo $user['address']; ?>" /><br>
                                <label>Adhar card</label><input type="text" name="adharcard"
                                    value="<?php echo $user['adharcard']; ?>" /><br>


                                <div class="d-flex my-3">
                                    <h4 class="h6 me-3 text-light">Single</h4>
                                    <input type="radio" name="status" id="M" value="single"
                                        style="width:initial;margin-right:15px;" required />
                                    <h4 class="h6 me-3 ms-5 text-light">Merried</h4>
                                    <input type="radio" name="status" id="F" value="married"
                                        style="width:initial;margin-right:15px;" />
                                </div>

                                <div class="d-flex my-3">
                                    <input type="checkbox" id="myCheck" style="width:initial;margin-right:15px;" />
                                    <h4 class="h6 text-light">terms and conditions</h4>
                                </div>


                                <div class="col-md-3 m-0 col-sm-12">
                                    <input type="submit" name="btn" id="btn" value="submit" /><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if(isset($_POST['btn'])){
        $updateObj = new User();
        $updateObj->userUpdate($id, $_POST);
    }
    ?>
    <section id="books-main" class=" pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-sm-12">
                    <div class="container bg-light py-2">
                        <div class="card-header font-weight-bold bg-success px-5 py-2 h3 text-light">BOOK LIST</div>
                    </div>
                    <div class="card-body bg-light p-3">
                        <?php
                            $bookObj = new Book();
                            $data = $bookObj->bookList();
                            foreach($data as $value){
                                ?>
                        <div class="container shadow px-5 py-3 my-5">
                            <div class="exam-heading d-flex justify-content-end py-3">
                                <div class="name text-warning"><i class="fa fa-calendar"></i> Date :
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
                </div>
            </div>
        </div>
    </section>

    <section id="application-main" class=" pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-sm-12">
                    <div class="container bg-light py-2">
                        <div class="card-header font-weight-bold bg-success px-5 py-2 h3 text-light">APPLICATION HISTORY
                        </div>
                        <div class="card-body p-3" style="min-height: 75vh;">
                            <table class="border-secondary border w-100 text-center text-dark"
                                style="background-color: gray">
                                <thead>
                                    <th>Application Id</th>
                                    <th>Exam Name</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Generate offline challan</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $value = $examObj->challan($id);    // GET CHALLAN DETAILS FOR USER'S EXAM
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $value["reId"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $value["exam_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $value["registerExamDate"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $value["amount"]; ?>
                                        </td>
                                        <td> <a target="_blank"
                                                href="challan.php?register=<?php echo $value['reId']; ?>"
                                                class="text-warning fw-bolder">Generate Challan</a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include"footer.php";  ?>
    <!-- DISPLAY ALL USER DETAILS OVER-->

    <!-- SCRIPT START -->
    <script>
        $(document).ready(function () {
            $("#btn").hide();
            $("#btn").prop('disabled', true);
            $("#books-main").hide();
            $("#profile-main").hide();
            $("#application-main").hide();
            $(".news-div").addClass("bg-warning");

            $("#editProfile").click(function () {
                $("#btn").prop('disabled', false);
            });

            $('#myCheck').click(function () {
                $("#btn").toggle(this.checked);
            });

            $("#btn-news").click(function () {
                $("#latest-main").fadeIn(500);
                $(".news-div").addClass("bg-warning");
                $(".book-div").removeClass("bg-warning");
                $(".profile-div").removeClass("bg-warning");
                $(".application-div").removeClass("bg-warning");
                $("#books-main").hide();
                $("#profile-main").hide();
                $("#application-main").hide();
            });

            $("#btn-profile").click(function () {
                $("#profile-main").fadeIn(500);
                $(".profile-div").addClass("bg-warning");
                $(".news-div").removeClass("bg-warning");
                $(".book-div").removeClass("bg-warning");
                $(".application-div").removeClass("bg-warning");
                $("#latest-main").hide();
                $("#books-main").hide();
                $("#application-main").hide();
            });

            $("#btn-book").click(function () {
                $("#books-main").fadeIn(500);
                $(".book-div").addClass("bg-warning");
                $(".news-div").removeClass("bg-warning");
                $(".profile-div").removeClass("bg-warning");
                $(".application-div").removeClass("bg-warning");
                $("#latest-main").hide();
                $("#profile-main").hide();
                $("#application-main").hide();
            });

            $("#btn-application").click(function () {
                $("#application-main").fadeIn(500);
                $(".application-div").addClass("bg-warning");
                $(".news-div").removeClass("bg-warning");
                $(".profile-div").removeClass("bg-warning");
                $(".book-div").removeClass("bg-warning");
                $("#latest-main").hide();
                $("#profile-main").hide();
                $("#books-main").hide();
            });

        });
    </script>
    <!-- SCRIPT OVER -->
</body>
<?php
  }
  else
  {
    header("Location:index.php");
  }
  ?>

</html>