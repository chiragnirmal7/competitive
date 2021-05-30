<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- REQUIRED LINKS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.css" />
    <!-- REQUIRED LINKS OVER -->
    <title></title>
</head>
<style>
    body {
        background: initial;
    }
    tr, td, th{
        border: 2px inset black;
        width: 50%;
    }
    td, th{
        padding: 5px 8px;
    }
</style>
<?php
if(isset($_SESSION['id']))
{
    ?>
<body>
<?php
    $date = date("d-m-Y");
    $expdate = new DateTime("+4 day");
    include "connection.php";
    $reid = $_GET['register'];
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM user WHERE userid = $id";
    $res = $conn->query($sql);
    foreach($res as $user){}
    $sql = "SELECT * FROM register_exam WHERE reId = $reid";
    $res = $conn->query($sql);
    foreach($res as $exam){}
?>
    <div class="container d-flex justify-content-end my-5">
    <button id="btn" class="btn btn-block bg-transparent border border-primary shadow-lg text-uppercase fw-bold">
        Download challan
    </button>
    </div>
    <section id="main">
        <div class="container my-4">
            <div class="row "style="margin: 0;">
            <div class="heading border border-2 border-dark">
                <div class="exam-name h1 text-center text-uppercase">
                    <?php echo $exam['exam_name']; ?>
                </div>
                <div class="fee text-center h2 text-uppercase">
                    Challn for fee deposit
                </div>
                <div class="h2 text-center text-capitalize mt-4 mb-2">
                    Combined <?php echo $exam['eQualification'];  ?> level examination, 2021
                </div>
            </div>
        </div>
            <div class="row text-center border border-2 border-dark border-dark border-top-0 border-bottom-0" style="margin: 0;">
                <div class="col-2 text-primary align-items-center d-flex justify-content-center"><h2>SSC</h2></div>
                <div class="col-8 border border-2 border-dark border-top-0 border-bottom-0">
                    <div>
                        <h1>BANK COPY</h1>
                        <p>To be mentioned by SBI branch<br>DEPOSIT IN ANY BRANCH OF SBI IN CASH ONLY</p>
                    </div>
                </div>
                <div class="col-2 align-items-center d-flex text-primary"><h2>State Balnk Of India</h2></div>
            </div>
            <table class="w-100">
                <tbody>
                    <tr>
                        <th class="text-left text-uppercase">challan reference number</th>
                        <td class="text-center text-uppercase"><?php echo $exam['reId']; ?></td>
                    </tr>
                    <tr>
                        <th class="text-left text-uppercase">Applicant's name</th>
                        <th class="text-center text-capitalize"><?php echo $user['username']." ".$user['fathername'];?></th>
                    </tr>
                    <tr>
                        <th class="text-left text-uppercase">Challan Generation date</th>
                        <th class="text-center text-uppercase"><?php echo $date; ?></th>
                    </tr>
                    <tr>
                        <th class="text-left text-uppercase">Challan expiry date</th>
                        <th class="text-center text-uppercase"><?php echo date('d-m-Y', strtotime('+4 days'));  ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h3>Amount: (In Fugurs):Rs.100 (In word):Rs. One Thousand Only</h3>
                            <p class="fw-light">*(No Bank Charges to be taken from deposit separatly)</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="h3" colspan="2">Signature of Depositor:_____________________</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">*******************Details below to be field by the bank*******************</td>
                    </tr>
                    <tr>
                        <th colspan="2" class="h4">SBI Branch Code:__________ <span class="mx-5"></span>DATE OF RECEIPT:__/__/____(dd/mm-yyyy)</th>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="mb-5">SBI JURNAL NO.</h3>
                            <p>_____________________</p>
                            <p>To be written in legible handwriting</p>
                        </td>
                        <td>
                            <h3 class="text-end mt-5">Signature of Bank's</h3>
                            <h3 class="text-end">Official with Seal</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <h2>Instructions for SBI Branches :</h2>
                        <ol style="list-style-type:upper-greek;">
                            <li>Branches should not refuce to accept the Challan.</li>
                            <li>Please note to write the <b>Jurnal Number</b> in all the challan.</li>
                            <li>Please check the number of the candidate positively after entering Registration ID.</li>
                            <li>No seprate charges/commission to be charged from depositor.</li>
                            <li>In case of any problem, Branch should contact Host Branch(000000) on this number<br>011-23374032, 011-12345612 $ E-mail - customercare: 00000 @abc.co.in</li>
                        </ol>
                        <h1 class="text-uppercase">Important notice to candidates</h1>
                        <br>
                        <ol style="list-style-type: upper-greek;">
                            <li>Challan to be deposited after minimum Three hours of generations od challan during Bank hours</li>
                            <li>Please note the <b>Last Date for reccipt of CASH payment by SBI</b> is: <b><?php echo date('d-m-Y', strtotime('+4days')) ?></b></li>
                        </ol>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script>

        $(document).ready(function(){
            $("#btn").click(function(){
                $("#btn").hide();
                window.print();
                $('#btn').show();
            })
        })
    </script>

</body>
<?php
}
else{
    header("Location:index.php");
}
?>
</html>