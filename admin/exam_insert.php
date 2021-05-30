<?php
session_start();
if(isset($_SESSION["id"]))
{
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" />
    <script src="./../bootstrap/js/bootstrap.min.js"></script>
    <script src="./../bootstrap/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="./../css/register.css" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid pt-3 pb-2 rounded align-items-center" id="navbar" style="background-color: cornflowerblue;">
        <div class="d-flex bd-highlight h5 justify-content-center">
            <a href="./"><button class="mx-3 bg-transparent text-white my-2 px-4 border-0">HOME</button></a>
        </div>
    </div>
    <section id="main">
        <div class="container p-5 my-5">
            <div class="main">
                <h2>InsertExam</h2>

                <section class="border my-5 py-5 px-2">
                <form method="POST" action="" id="form" enctype="multipart/form-data">
                    <div>
                        <label for="examName">Exam Name</label>
                        <div>
                            <input type="text" name="examName" id="examName" placeholder="Exam Name">
                        </div>
                        <p class="text-warning" id="examNameError"></p>

                    </div>


                    <label for="examDescription">examDescription</label>
                    <div class="w-100">
                        <div class=" col-md-10">
                            <textarea id="examDescription" name="examDescription" class="textarea"
                                placeholder="Type examDescription Here"></textarea>
                        </div>
                        <p class="text-warning" id="examDescriptionError"></p>
                        <div class=" col-md-2"></div>
                    </div>

                    <div>
                        <label for="categoryPercentage">Category Percentage</label>
                        <div>
                            <input type="text" name="categoryPercentage" id="categoryPercentage"
                                placeholder="EX...(SC, ST, ETC : 20%) (GENERAL, OBC : 25%)">
                        </div>
                        <p class="text-warning" id="categoryPercentageError"></p>

                    </div>

                    <div class="d-flex justify-content-between align-items-center ">
                        <div class=" col-md-5 ">
                            <div>
                                <label for="qualificationLevel">Minimum Qualification Level</label>
                                <div>
                                    <select class="select" name="qualificationLevel" id="qualificationLevel">
                                        <option value="">SELECT Qualification level</option>
                                        <option value="Matriculation (10th)">Matriculation (10th)</option>
                                        <option value="Higher secondary">Higher secondary</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="graduate">graduate</option>
                                        <option value="post graduate">post graduate</option>
                                        <option value="ph.D ">ph.D</option>
                                    </select>
                                </div>
                                <p class="text-warning" id="qualificationLevelError"></p>
                            </div>
                        </div>
                        <div class=" col-md-5">
                            <div>
                                <label for="sheetsA">Availble Sheets (Numbers)</label>
                                <div>
                                    <input type="tel" id="sheetsA" placeholder="Available Sheets" name="sheetsAvailable" />
                                </div>
                                <p class="text-warning" id="sheetsAError"></p>
                            </div>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-md-5">
                            <label for="startDate">Register Start Date</label>
                            <div>
                                <input type="date" name="startDate" id="startDate">
                            </div>
                            <p class="text-warning" id="startDateError"></p>
                        </div>
                        <div class="col-md-5">
                            <label for="endDate">Register End Date </label>
                            <div>
                                <input type="date" name="endDate" id="endDate">
                            </div>
                            <p class="text-warning" id="endDateError"></p>
                        </div>
                        <div class=" col-2">
                            <div>

                            </div>
                        </div>
                    </div>
                </section>
                <div class="d-flex mx-2">
                    <input type="checkbox" id="term" style="width:initial;margin-right:15px" />
                    <h4 class="h6">terms and conditions</h4>
                </div>
            </div>
            <div class="my-2 ">
                <button name="sbmtbtn" type="submit" id="registerBtn"  style="pointer-events: none;"  class="btn btn-lg bg-primary text-light w-25" id="insertExam">Submit</button>
            </div>
        </div> <!-- .container over -->
        </form>
    </section>

<?php

if(isset($_POST['sbmtbtn']))
{
    require "databaseClass.php";
    require "examClass.php";
    $examObj = new Exam();
    $examObj->examInsert($_POST);
    ?>
    <script>
        // $('#DDOP').html(res);
        document.getElementById("examName").innerHTML = "";
        document.getElementById("examdescription").innerHTML = "";
        document.getElementById("categoryPercentage").innerHTML = "";
        document.getElementById("qualificationLevel").innerHTML = "";
        document.getElementById("sheetsA").innerHTML = "";
        document.getElementById("startDate").innerHTML = "";
        document.getElementById("endDate").innerHTML = "";
    </script>
<?php
}
?>
    <!-- PRINTING DATE TEMP -->

    <div id="DDOP"></div>
    <div id="data"></div>

    <!-- PRINTIG DATA TEMP OVER -->

    <!-- SCRIPT START -->


    <script>
        $(document).ready(function () {
            $("form").keypress(function(e) {
            //Enter key
                if (e.which == 13) {
                    return false;
                }
            });
            document.getElementById("examName").focus();
            var checkBox = document.getElementById("term");
            var btn = document.getElementById("registerBtn");
            $("#term").on('change', function () {
                if(checkBox.checked == true)
                {
                    var examName = document.getElementById("examName").value;
                    var examDescription = document.getElementById('examDescription').value;
                    var categoryPercentage = document.getElementById('categoryPercentage').value;
                    var qualification = document.getElementById('qualificationLevel').value;
                    var sheetsAvailable = document.getElementById('sheetsA').value;
                    var startDate = document.getElementById('startDate').value;
                    var endDate = document.getElementById('endDate').value;
                    check_int = /^-?[0-9]+$/;

                    if (endDate == '') 
                    {
                        document.getElementById("endDateError").innerHTML = "Date Error";
                        document.getElementById("endDate").focus();
                    } 
                    else 
                    {
                        var dateEnd = new Date(endDate);
                        var currentDate = new Date();
                        if (Date.parse(dateEnd) < Date.parse(currentDate)) 
                        {
                            document.getElementById("endDate").focus();
                            document.getElementById("endDateError").innerHTML = "select future date";
                        } 
                        else 
                        {
                            document.getElementById("endDateError").innerHTML = "";
                        }
                    }

                    if (startDate == '') 
                    {
                        document.getElementById("startDateError").innerHTML = "Date Error";
                        document.getElementById("startDate").focus();
                    } 
                    else 
                    {
                        var dateStart = new Date(startDate);
                        var currentDate = new Date();
                        if (Date.parse(dateStart) < Date.parse(currentDate)) 
                        {
                            document.getElementById("startDate").focus();
                            document.getElementById("startDateError").innerHTML = "select future date";
                        } else 
                        {
                            document.getElementById("startDateError").innerHTML = "";
                        }
                    }

                    a = check_int.test(sheetsAvailable);
                    if ((sheetsAvailable.length > 0 && a === true)) 
                    {
                        document.getElementById("sheetsAError").innerHTML = "";
                    } else 
                    {
                        document.getElementById("sheetsAError").innerHTML = "Check Sheets ";
                        document.getElementById("sheetsA").focus();
                    }

                    if (!qualification.length) 
                    {
                        document.getElementById('qualificationLevelError').innerHTML = "Select Qualification level";
                        document.getElementById('qualificationLevel').focus();
                    } else 
                    {
                        document.getElementById('qualificationLevelError').innerHTML = "";
                    }

                    if (categoryPercentage.length < 15 || categoryPercentage.length > 99) 
                    {

                        document.getElementById("categoryPercentageError").innerHTML = "Enter categoryPercentage (min-15, max-99 char)";
                        document.getElementById("categoryPercentage").focus();
                    } 
                    else 
                    { document.getElementById("categoryPercentageError").innerHTML = ""; }

                    if (examDescription.length < 5 || examDescription.length > 4000) 
                    {
                        document.getElementById("examDescriptionError").innerHTML = "Enter examDescription (min-512, max-4000 char)";
                        document.getElementById("examDescription").focus();
                    }
                    else 
                    { document.getElementById("examDescriptionError").innerHTML = ""; }

                    if (examName.length < 5 || examName.length > 80) 
                    {
                        document.getElementById("examNameError").innerHTML = "Enter examName (min-5, max-80 char)";
                        document.getElementById("examName").focus();
                    } 
                    else 
                    { document.getElementById("examNameError").innerHTML = "";
                        status = 1;
                    }

                    if (!examName.length || !examDescription.length || !categoryPercentage.length || qualification == 0 || !sheetsAvailable.length || startDate == '' || endDate == '') 
                    {
                    alert("Fill Required Fields  !!!")
                    $('#term').prop('checked', false);
                    }
                    else 
                    {
                    btn.style.pointerEvents = "auto";
                    }
                }
                else
                {
                    btn.style.pointerEvents = "none";
                }
                
            });
        });
    </script>

    <!-- SCRIPT OVER -->
</body>
<div class="footer fw-bold my-5">
        <div class="bg-secondary text-light text-center py-3 fixed-bottom"><i>
                &copy; 2021 COMPETITIVE. All Rights Reserved.
            </i></div>
    </div>
</html>
<?php
}
else
{
    header("Location:./");
}
?>