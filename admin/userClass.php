<?php
    // require("databaseClass.php");
    class User extends DbConnection
    {

        // USER SELECT BY ID
        public function userDataById($id)
        {
            $sql = "SELECT * FROM user WHERE userid = $id";
            $res = $this->database()->query($sql);
            foreach($res as $user){     }            
            return $user;
        }

        // USER UPDATE
        public function userUpdate($id, $data)
        {
            $username = $_POST['username'];
            $lastname = $_POST['lastname'];
            $fathername = $_POST['fathername'];
            $mothername = $_POST['mothername'];
            $birthdate = $_POST['birthdate'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $qualification = $_POST['qualification'];
            $email = $_POST['email'];
            $phone = $_POST['pnoneno'];
            $address = $_POST['address'];
            $adhar = $_POST['adharcard'];
            $status = $_POST['status'];
            if(isset($_POST['adharcard']))
            {
                $sql = "UPDATE user SET username = '$username', lastname = '$lastname', fathername = '$fathername', mothername = '$mothername', birthdate = '$birthdate', state = '$state', city = '$city', qualification = '$qualification', status = '$status', email = '$email', phone = '$phone', address = '$address', adharcard = '$adhar', status = '$status' WHERE userid = '$id' ";
                // $conn->query($sql);
                echo '<script> alert("Profile Updated !") 
                window.location = "./";</script>';
            }
            else
            {
                // ADMIN SIDE QUERY
                $sql = "UPDATE user SET username = '$username', fathername = '$fathername', mothername = '$mothername', birthdate = '$birthdate', state = '$state', city = '$city', qualification = '$qualification', status = '$status', email = '$email', phone = '$phone', address = '$address' WHERE userid = '$id' ";
                // $conn->query($sql);
                echo '<script>alert("User Updated");</script>';
                echo '<script>window.location = "./";</script>';
            }
        }

        // DELETE USER
        public function userDelete($id)
        {
            $sql = "DELETE FROM user WHERE userid = $id";
            // $this->database()->query($sql);
            echo '<script>alert("user deleted");</script>';
            echo '<script>window.location = "./";</script>';
        }

        // CHANGE PASSWORD
        public function changePassword($id, $data)
        {
            $id = $_SESSION['id'];
            $old = $_POST['opass'];
            $new = $_POST['upass'];
            $cnew = $_POST['cpass'];
            $sql = "SELECT password FROM user WHERE userid = $id";
            $res = $this->database()->query($sql);
            foreach($res as $row)
            {
                if($old == $row['password'])
                {
                    if($new == $cnew)
                    {
                        $up = "UPDATE user SET password = '$new' WHERE userid = $id";
                        $this->database()->query($up);
                        echo "<script>window.location = 'logout.php';</script>";
                        
                    }
                    else
                    {
                        echo "<script>alert('New password And confoirm password not match');</script>";
                    }
                }
                else
                {
                    echo "<script>alert('Password Not Change');</script>";
                }
            }
        }
    }
?>