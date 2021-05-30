<?php
session_start();
?>
<html lang="en">

<head>
    <?php include "headerfiles.html" ?>
    <title>Document</title>
</head>
<style>
    .icon img{
        height: 225px;
        width: 225px;
        border: 2px outset coral;
        opacity: .7;
        transition: .3s ease-in-out;
    }
    .icon img:hover{
        opacity: 1;
    }
    @media (max-width: 1050px){
        .row.examMain {
            display: flex;
            flex-direction: column-reverse;
        }
        .examMain .col-md-9 {
            width: 100%;
        }
        .examMain .col-md-3 {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }
        .examMain .col-md-3 .icon{
            margin: 0 15px;
        }
    }
</style>
<body>

<?php include"navbar.php"?>

<div class="container-fluid">
<div class="row examMain">
        <div class="col-md-3 flex-row text-center">
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
        <div class="col-md-9">
    <?php
        require "./admin/databaseClass.php";
        require "./admin/examClass.php";
        $examObj = new Exam();
        $data = $examObj->examList();
        foreach($data as $row){
    ?>
    <div class="examContainer bg-light shadow px-5 py-3 my-5 h5">
        <div class="d-flex justify-content-between align-items-center text-primary">
            <div class="text-start">
                <h4 class="h"><span class="h2 text-primary px-1" id="start-date">
                <?php echo $row["examName"]; ?></span></h4>
            </div>
            <div class="start-date text-end my-2">
                <div class="text-start">
                <span class="h5"><?php echo $row["createDate"]; ?></span>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="h5 fw-lighter" id="examDescription">
                <p>
                    <?php echo $row["examDescription"]; ?>
                </p>
            </div>
            <div class="d-flex justify-content-start align-items-center mt-2">
                <div class="h5">Required Qualification :</div> 
                <div class="text-success h6 bg-light mx-3 p-2"><?php echo $row["qualification"]; ?></div>
            </div>
            <div class=" justify-content-start align-items-center my-3">
                <h4 class="h6 text-uppercase">minimum qualifying marks in Computer Based Examination, are fixed as follows:</h4>
                <div class="text-success h6 d-flex">
                    <?php echo $row["categoryPercentage"]; ?>
                </div>
            </div>
            <div class="d-flex justify-content-start align-items-center my-3">
                <h4 class="h6 text-uppercase">Available Sheets</h4>
                <div class="text-success h6 bg-light mx-3 p-2">
                    <?php echo $row["availableSheets"]; ?>
                </div>
            </div>      
            <div class="d-flex justify-content-between align-items-center my-3 ">
                <div class="start-date text-end d-flex">
                    <h4 class="h6 py-2">END REGISTRATOIN DATE</h4>
                    <span class="h6 text-warning bg-light mx-3 p-2" id="start-date">
                        <?php echo $row["endDateRegistration"]; ?>
                    </span>
                </div>
            </div>
        </div>
        <?php
    if(isset($_SESSION['id'])){
        ?>
        <div class="d-flex justify-content-end align-items-center my-2">
            <div class="apply-btn">
            <a href="apply_exam.php?examname=<?php echo $row["examName"]; ?>"><button class="btn btn-block btn-success px-3 ">APPLY NOW</button></a>
            </div>
        </div>
    </div>
    <?php
    }else{
        ?>
        <div class="d-flex justify-content-end align-items-center my-2">
            <div class="apply-btn">
                <a href="index.php"><button class="btn btn-block btn-success px-3"><span class="h5 fw-light">Register Now</span></button></a>
            </div>
        </div>
    </div>
    <?php
    }
}
?>
</div>
</div>
</div>
<?php
include "footer.php";
?>
</body>

</html>