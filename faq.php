<?php

$question = $_POST['faq'];
include "connection.php";
$sql = "INSERT INTO faq (question) VALUES ('$question')";
// $conn->query($sql);

?>