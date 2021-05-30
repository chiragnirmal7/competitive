<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);
echo "Logging out wait...";
echo '<script>setTimeout(function(){ window.location = "index.php"; }, 2000);</script>';
?>