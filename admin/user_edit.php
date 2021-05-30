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
    <link rel="stylesheet" href="./../css/admin.css" />
    <title>User Edit</title>
</head>
<style>

</style>
<?php
if(isset($_GET['userid'])){
    $id = $_GET['userid'];
    include("connection.php");
    $sql = "SELECT * FROM user WHERE userid = $id";
    $res = $conn->query($sql);
    foreach($res as $row){}
}
?>
<body>
<div class="h1 text-center my-5"><?php echo $row['username']. " " .$row['lastname'] ?></div>
<div class="container justify-content-center bg-secondary d-flex my-5 p-5 ">
    <form action="" method="post" id="myForm">
        <div class="user-select-none">
        <div class="d-flex user-select-none">
        <img src="./../upload/<?php echo $row['imagefile']; ?>" alt="not" height="250" width="250">image<br>
        <img src="./../upload/<?php echo $row['signfile']; ?>" alt="not" height="250" width="250">sign<br>
        </div>
        <label>Gender </label><input type="text" name="gender" value="<?php echo $row['gender']; ?>" disabled><br>
        <label>Exam Board </label><input type="text" name="examboard" value="<?php echo $row['examboard']; ?>" disabled><br>
        <label>Passing year </label><input type="text" name="passyear" value="<?php echo $row['passingyear']; ?>" disabled><br>
        <label>Roll no </label><input type="text" name="rollno" value="<?php echo $row['rollno']; ?>" disabled><br>
        <label>Adhar card </label><input type="text" name="adharcard" value="<?php echo $row['adharcard']; ?>" disabled /><br>
        </div>

        <label>firstname </label><input type="text" name="username" value="<?php echo $row['username'] ?>" /><br>
        <label>lastname </label><input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" /><br>
        <label>fathername </label><input type="text" name="fathername" value="<?php echo $row['fathername'] ?>" /><br>
        <label>mothername </label><input type="text" name="mothername" value="<?php echo $row['mothername'] ?>" /><br>
        <label>birth date </label><input type="date" name="birthdate" value="<?php echo $row['birthdate']  ?>"/><br>
        
            <div>
                <label for="state" >State</label>
                <div>
                    <select class=" select" id="state" name="state" >
                        <option value=""><?php echo $row['state'] ?></option>
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
                    <select class=" select" id="city" name="city" d>
                        <option value=""><?php echo $row['city'] ?></option>
                        <option value="RAJKOT">RAJKOT</option>
                        <option value="NOIDA">NOIDA</option>
                        <option value="JAIPUR">JAIPUR</option>
                        <option value="LUDHIANA">LUDHIANA</option>
                        <option value="PUNE">PUNE</option>
                    </select>
                </div>
                
            </div>

            <label for="qualificationLevel">Qualification Level</label>
            <div>
                <select class=" select" name="qualification" id="qualificationLevel" d>
                    <option value=""><?php echo $row['qualification'] ?></option>
                    <option value="Matriculation (10th)">Matriculation (10th)</option>
                    <option value="Higher secondary">Higher secondary</option>
                    <option value="Diploma">Diploma</option>
                    <option value="graduate">graduate</option>
                    <option value="post graduate">post graduate</option>
                    <option value="ph.D ">ph.D</option>
                </select>
            </div><br>
        
            
            <label>marital status </label><input type="text" name="status" value="<?php echo $row['status']; ?>"><br>
            <label>email </label><input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
            <label>Phone no </label><input type="tel" name="pnoneno" value="<?php echo $row['phone']; ?>"><br>
            <label>Address </label><input type="text" name="address" id="address" value="<?php echo $row['address']; ?>"/><br>
        
        <div class="container-fluid text-align-start align-items-center">
        <label for="myCheck">terms and conditions</label>
            <input style="width:initial;" type="checkbox" id="myCheck" onclick="myFunction()">
        
        <div class="col-md-6 col-sm-12">
            <input type="submit" style="display:none" name="btn" class="w-50" id="btn" value="Update"/><br>
        </div>
        </div>
        
        <!-- <input type="checkbox" name="checkbox" id="ok" value="check"  /> -->
    </form>
</div>
<div class="p-4">


</div>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("btn");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<!-- <script>
    $(document).ready(function(){
        $('#ok').on('change', function(){
            alert('change');
        });
    });
</script> -->
</body>
</html>


<?php
if(isset($_POST['btn'])){
    require("userClass.php");
    $userObj = new user();
    $userObj->userUpdate($id, $_POST);
}
}
else
{
    header("Location:./");
}
?>
