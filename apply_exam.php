<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "headerfiles.html"; ?>
    <title>Document</title>
</head>
<style>
label{width: 250px;color: white!important;}
#myForm input{width: 100%;}
</style>
<body>
    <?php include "navbar.php";
        require_once "./admin/databaseClass.php";
        require_once "./admin/userClass.php";
        require_once "./admin/examClass.php";
        $selectUserObj = new User();
        $id = $_SESSION["id"];
        $user = $selectUserObj->userDataById($id);  //RETUENS ARRAY CONTAINING USER DETAILS IN $res VARIABLE
    ?>
    <div class="container justify-content-center bg-secondary d-flex my-5 p-5">
        <form action="" method="post" id="myForm" style="width:90%;">
            <input type="text" id="exam_name" class="pointer" name="exam_name" value="<?php echo $_GET['examname'];  ?>" style="pointer-events: none;">
            <input type="hidden" class="pointer" name="userid" id="userid" value="<?php echo $user['userid']  ?>">
            <label>username</label><input type="text" name="username" value="<?php echo $user['username'] ?>" /><br>
            <label>fathername</label><input type="text" name="fathername"
                value="<?php echo $user['fathername'] ?>" /><br>
            <label>mothername</label><input type="text" name="mothername"
                value="<?php echo $user['mothername'] ?>" /><br>
            <label>birth date</label><input type="date" name="birthdate"
                value="<?php echo $user['birthdate']  ?>" /><br>
                <br>
                <div class="user-select-none">
                
                    <label>Gender</label> <input type="text" name="gender" value="<?php echo $user['gender']; ?>"
                        disabled><br>
                    <label>Exam Board</label> <input type="text" name="examboard" value="<?php echo $user['examboard']; ?>"
                        disabled><br>
                    <label>Passing year</label> <input type="text" name="passyear"
                        value="<?php echo $user['passingyear']; ?>" disabled><br>
                    <label>Roll no </label><input type="text" name="rollno" value="<?php echo $user['rollno']; ?>"
                        disabled><br>
                    <label>Adhar card</label><input type="text" name="adharcard" value="<?php echo $user['adharcard']; ?>"
                        disabled /><br>
                    <label>
                </div>

            <div>
                <label for="state">State</label>
                <div>
                    <select class=" select" id="state" name="state">
                        <option value="">
                            <?php echo $user['state'] ?>
                        </option>
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
                        <option value="">
                            <?php echo $user['city'] ?>
                        </option>
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
                <select class=" select pointer" name="qualification" id="qualificationLevel" d>
                    <option value="<?php echo $user['qualification'] ?>">
                        <?php echo $user['qualification'] ?>
                    </option>
                    <option value="Matriculation (10th)">Matriculation (10th)</option>
                    <option value="Higher secondary">Higher secondary</option>
                    <option value="Diploma">Diploma</option>
                    <option value="graduate">graduate</option>
                    <option value="post graduate">post graduate</option>
                    <option value="ph.D ">ph.D</option>
                </select>
            </div><br>


            <label>marital status</label> <input type="text" name="status" value="<?php echo $user['status']; ?>"><br>
            <label>email </label><input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
            <label>Phone no </label><input type="tel" name="pnoneno" value="<?php echo $user['phone']; ?>"><br>
            <label>Address</label><input type="text" name="address" id="address"
                value="<?php echo $user['address']; ?>" /><br>

                <div class="d-flex my-3">
                    <input type="checkbox" id="myCheck" style="width:initial;margin-right:15px;"  />
                    <h4 class="h6">terms and conditions</h4>
                </div>
            
                
                <div class="col-md-3 m-0 col-sm-12">
                    <input type="submit"  name="btn" id="btn" value="submit" /><br>
                </div>           
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $("#btn").hide();
            $("#myForm :input").prop("disabled", true);
            $("#myCheck").prop("disabled", false);
            $("#btn").prop("disabled", false);
            $("#exam_name").prop("disabled", false);
            $("#qualificationLevel").prop("disabled", false);
            $("#userid").prop("disabled", false);
            $('#myCheck').click(function() {
                $("#btn").toggle(this.checked);
            });
        });
    </script>
</body>
</html>

<?php
    if(isset($_POST['btn']))
    {
        $aplyExamObj = new Exam();
        $aplyExamObj->applyExam($id, $_POST);       //    POSTING USER DETAILS FOR APPLYING EXAM
    }
?>

<!-- SELECT register_exam.userid, register_exam., user.userid FROM register_exam, user WHERE register_exam.userid = user.userid -->