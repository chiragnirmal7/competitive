<?php
$k[] = $_POST['insert_entry'];
$userName = $k[0]['firstname'];
$lastName = $k[0]['lastname'];
$fatherName =  $k[0]['fathername'];
$motherName = $k[0]['mothername'];
$bitrhDate = $k[0]['birthdate'];
$gender = $k[0]['gender'];
$status = $k[0]['status'];
$state = $k[0]['state'];
$city = $k[0]['city'];
$examBoard = $k[0]['bord'];
$passYear = $k[0]['passyear'];
$rollNo = $k[0]['rollno'];
$qualification = $k[0]['qualification'];
$email = $k[0]['email'];
$phoneNo = $k[0]['phoneno'];
$address = $k[0]['address'];
$adharCardNo = $k[0]['adharcard'];
$loginId = $k[0]['loginid'];
$passWord = $k[0]['password'];
$imageFileName = $k[0]['imagefile'];
$signFileName = $k[0]['signfile'];
$count = 0;

include("connection.php");
$sql1 = "SELECT loginid, email FROM user WHERE loginid = '$loginId' OR email = '$email' LIMIT 1";
    $res = $conn->query($sql1);
    $result = $res->fetchall();
    foreach ($result as $value) {
        if ($result == True) 
        {
            echo 0;
            $count = 1;
            echo "Email OR Login id is already exists !";
        }
    }  
    if ($count == 0){
    print_r($k);
    $sql = "INSERT INTO `user`( `username`, `lastname`, `fathername`, `mothername`, `birthdate`, `gender`, `state`, `city`, `examboard`, `passingyear`, `rollno`, `qualification`, `email`, `phone`, `address`, `adharcard`, `loginid`, `password`, `imagefile`, `signfile`, `status`) VALUES ('$userName','$lastName', '$fatherName', '$motherName', '$bitrhDate', '$gender', '$state', '$city', '$examBoard', '$passYear', '$rollNo', '$qualification', '$email', '$phoneNo', '$address', '$adharCardNo', '$loginId', '$passWord', '$imageFileName', '$signFileName', '$status')";
    $conn->query($sql);
    echo 1;
    }
?>