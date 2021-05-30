<?php
session_start();
if(isset($_SESSION['id']))
{
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" />
    <script src="./../bootstrap/js/bootstrap.min.js"></script>
    <script src="./../bootstrap/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="./../css/register.css" />
    <title>Document</title>
</head>
<style>
    body{
        background-color: powderblue;
    }
    #registerBtn{
        pointer-events: none;
    }
</style>
<body>
    <div class="container-fluid pt-3 pb-2 rounded align-items-center" id="navbar" style="background-color: cornflowerblue;">
        <div class="d-flex bd-highlight h5 justify-content-center">
            <a href="./"><button class="mx-3 bg-transparent text-white my-2 px-4 border-0">HOME</button></a>
        </div>
    </div>
    <section id="main">
        <div class="container p-5 my-5 bg-transparent bg-gradient ">
            <div class="main">
                <h2>Insert Book</h2>

                <section class="border border-dark my-5 py-5 px-2 ">
        <form method="POST" action="" id="form" enctype="multipart/form-data">
                    <div>
                        <label for="bookName">Book Name<span class="text-danger h4">*</span></label>
                        <div>
                            <input type="text" name="bookName" id="bookName" required placeholder="Book Name" title="Book Name Required">
                        </div>
                        <p class="text-warning" id="bookNameError"></p>

                    </div>
                    <label for="bookDescription">BookDescription<span class="text-danger h4">*</span></label>
                    <div class="w-100">
                        <div class=" col-md-10">
                            <textarea id="bookDescription" name="bookDescription" class="textarea"
                                placeholder="Type your permanent bookDescription here" ></textarea>
                        </div>
                        <p class="text-warning" id="bookDescriptionError"></p>
                        <div class=" col-md-2"></div>
                    </div>

                    <div class="my-5"></div>
                    <div class="d-flex">
                        <input type="file" name="pdfFile" class="form-control border-0 text-primary" id="pdfFile" style="width: initial;"/><span class="text-danger h4">*</span></div>
                    <p class="text-warning" id="fileError"></p>

                </section>
                <div class="d-flex mx-2">
                    <input type="checkbox" id="term" style="width:initial;margin-right:15px;"  />
                    <h4 class="h6">terms and conditions</h4>
                </div>
            </div>
            <div class="start-date text-end my-2">
                <div class="text-start">
                    <button type="submit" name="sbmtbtn" class="btn btn-lg bg-primary text-light"
                        id="registerBtn">Submit</button>
                </div>
            </div>
        </div><!-- .container over -->
</form>

    </section>
    <?php
if(isset($_POST['sbmtbtn']))
{
    require "databaseClass.php";
    require "bookClass.php";
    $bookObj = new Book();
    $bookObj->bookInsert($_POST);
}
?>
    <!-- PRINTING DATE TEMP -->
    <div id="outPutData"></div>
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
            document.getElementById("bookName").focus();
            
            var checkBox = document.getElementById("term");
            var btn = document.getElementById("registerBtn");
            $("#term").on('change', function () {
                if (checkBox.checked == true) 
                {
                    var bookName = document.getElementById("bookName").value;
                    var bookDescription = document.getElementById('bookDescription').value;
                    var fileExtension = document.getElementById("pdfFile").value.split('.')[1];
                    var file_data = document.getElementById('pdfFile').value;
                    var fileName = file_data.slice(file_data.search('h') + 2, file_data[-1]);

                    if (!file_data.length) {
                    document.getElementById("fileError").innerHTML = "Select File";
                    document.getElementById("pdfFile").focus();
                    } else {
                        if (fileExtension != "pdf") {
                            document.getElementById("fileError").innerHTML = "Select pdf Formate";
                            $('#term').prop('checked', false);
                            document.getElementById("pdfFile").focus();
                        } else {
                            document.getElementById("fileError").innerHTML = "";
                        }
                    }
                    
                    if (!bookName.length || !bookDescription.length || !file_data.length) {
                        alert("Please Fill Required Fields");
                        // $("form").submit(function(e){e.preventDefault(e);});
                        $('#term').prop('checked', false);
                    } 
                    else 
                    {
                        btn.style.pointerEvents = "auto";
                        // alert("Inserted");
                    }
                        // btn.style.pointerEvents = "auto";
                    } 
                else 
                {
                    btn.style.pointerEvents = "none";
                }
            });
        });
    </script>

    <!-- SCRIPT OVER -->
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