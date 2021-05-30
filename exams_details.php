<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "headerfiles.html" ?>
    <title>Exam Details</title>
</head>
<style>
    #exam-main{
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;
    }
    .container{
        width: 90%;
    }
</style>

<?php
$id = $_GET['bookid'];
require "./admin/databaseClass.php";
require "./admin/examClass.php";
$examObj = new Exam();
$row = $examObj->examListById($id);
?>

<body>
    <section id="header_main">
        <nav class="d-flex justify-content-between w-100 align-items-center bg-success fixed-top">
            <input type="checkbox" id="nav-toggle">
            <div class="logo"><a href="index.php">Competitive</a></div>
            <ul class="d-flex h2">
                <!-- <li><a href="home.php">Home</a></li> -->
                <li><a href="booklist.php"><i class="fa fa-book"></i>books</a></li>
                <li><a href="examlist.php"><i class="fa fa-list"></i>examList</a></li>
                <li><a href="#">changes</a></li>
                <?php   if(isset($_SESSION['username'])){
                    echo '<li><a class="text-warning" href="logout.php">Logout</a></li>';
                }else{
                    echo '<li><a class="text-warning" href="register.php">Register</a></li>';
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

    
    <section id="exam-main">
        <div class="exam">
            <div class="exam-details bg-light text-start container p-5 shadow-lg">
                
                <div class="h1 text-center h1 mb-5 bg-light p-1" id="examName"><?php echo $row['examName']; ?></div>

                
                <div class="d-flex justify-content-between align-items-center">
                    <div class="start-date my-4 text-end d-flex">
                        <h4 class="h6">START REGISTRATOIN DATE</h4>
                        <span class="h6 text-success bg-light mx-3 px-2" id="start-date"><?php echo $row['startDateRegistration'] ?></span>
                    </div>
                </div>
                
                <div class="font-monospace" id="examDescription">
                    <p>
                        <?php echo $row['examDescription'] ?>
                    </p>
                </div>
                    
                
                <div class="d-flex justify-content-start align-items-center mt-2">
                    <div class="h5">Required Qualification :</div> 
                    <div class="text-success h6 bg-light mx-3">
                        <?php
                            echo $row['qualification']
                        ?>
                    </div>
                </div>
                <div class=" justify-content-start align-items-center my-3">
                    <h4 class="h6 text-uppercase">minimum qualifying marks in Computer Based Examination, are fixed as follows:</h4>
                    
                    <div class="text-success h6 d-flex">
                        <?php 
                            echo $row['categoryPercentage']
                        ?>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center my-3">
                    <h4 class="h6 text-uppercase">Available Sheets</h4>
                    <div class="text-success h6 bg-light mx-3">
                        <?php 
                            echo $row['availableSheets']
                        ?>
                    </div>
                </div>

                
                <div class="d-flex justify-content-between align-items-center my-3 ">
                    <div class="start-date text-end d-flex">
                        <h4 class="h6">END REGISTRATOIN DATE</h4>
                        <span class="h6 text-warning bg-light mx-3 px-2" id="start-date">
                            <?php
                                echo $row['endDateRegistration']
                            ?>
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-start">
                        <h4 class="h6">NOTICE ISSUE DATE</h4>
                        <span class="h6 text-success bg-light px-1" id="start-date">
                            <?php
                                echo $row['createDate']
                            ?>
                        </span>
                    </div>
                    <div class="start-date text-end my-2">
                        <div class="text-start">
                            <?php
                                if(isset($_SESSION["username"])) {
                                    echo '<a href="apply_exam.php?bookname='.$row["examName"].'"><button class="btn btn-block btn-success px-3 ">APPLY NOW</button></a>';
                                }else
                                {
                                    echo '<a href="register.php"><button class="btn btn-block btn-success px-3 ">REGISTER NOW</button></a>';
                                }
                            ?>                        
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
</body>
</html>