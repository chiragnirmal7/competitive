<?php
session_start(); 
include "headerfiles.html";
include "navbar.php";
?>
<div class="container-fluid h-50 my-5 p-4 text-capitalize">
    <div class="card-header bg-success text-warning h3">EXAM UPDATES</div>
    <div class="row row-cols-5 text-justify">
        <div class="col bg-success text-light text-uppercase text-center p-3 h5">Exam Name</div>
        <div class="col bg-success text-light text-uppercase border-start text-center p-3 h5">Required Question</div>
        <div class="col bg-success text-light text-uppercase border-start text-center p-3 h5">Available Sheets</div>
        <div class="col bg-success text-light text-uppercase border-start text-center p-3 h5">start Date Registration
        </div>
        <div class="col bg-success text-light text-uppercase border-start text-center p-3 h5">end Date Registration
        </div>
        <?php
            require "./admin/databaseClass.php";
            require "./admin/examClass.php";
            require "./admin/bookClass.php";
            $examObj = new Exam();
            $updates = $examObj->examUpdates();
            foreach($updates as $update){
        ?>
        <div class="col p-3 border border-info">
            <?php echo $update["examName"]; ?>
        </div>
        <div class="col p-3 border border-info">
            <?php echo $update["qualification"]; ?>
        </div>
        <div class="col p-3 border border-info text-center">
            <?php echo $update["availableSheets"]; ?>
        </div>
        <div class="col p-3 border border-info text-center">
            <?php echo $update["startDateRegistration"]; ?>
        </div>
        <div class="col p-3 border border-info text-center">
            <?php echo $update["endDateRegistration"]; ?>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<div class="container-fluid  my-5 p-4 text-capitalize">
    <div class="card-header bg-success text-warning h3">BOOK UPDATES</div>
    <div class="row row-cols-3 text-justify">
        <div class="col-3 bg-success text-uppercase text-light text-center p-3 h5">BOOK Name</div>
        <div class="col-6 bg-success text-uppercase text-light border-start text-center p-3 h5">BOOK Description</div>
        <div class="col-3 bg-success text-uppercase text-light border-start text-center p-3 h5">ISSUE DATE</div>

        <?php
        $bookObj = new Book();
        $data = $bookObj->bookUpdates();
        foreach($data as $update){
        ?>
        <div class="col-3 p-3 border border-info text-uppercase">
            <?php echo $update["bookName"]; ?>
        </div>
        <div class="col-6 p-3 border border-info">
            <?php echo substr($update['bookDescription'], 0, 200); ?>...
        </div>
        <div class="col-3 p-3 border border-info text-center">
            <?php echo $update["bookIssueDate"]; ?>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<?php
require "footer.php";
?>