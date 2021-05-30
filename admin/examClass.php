<?php
// require("databaseClass.php");
    class Exam extends DbConnection
    {
        // GET EXAM DETAILS BY ID
        public function examListById($id)
        {
            $sql = "select * from exam where examid = $id";
            $res = $this->database()->query($sql);
            foreach($res as $row){ }
            return $row;
        }
        // EXAM LIST
        public function examList()
        {
            $value = array();
            $sql = "SELECT * from exam";
            $res = $this->database()->query($sql);
            foreach($res as $data)
            {
                $value[] = $data;
            }
            return $value;
        }

        // EXAM UPDATE
        public function examUpdate($id, $data)
        {
            $name = $_POST['examname'];
            $description =  $_POST['description'];
            $qualification = $_POST['qualification'];
            $categoryPer = $_POST['categorypercentage'];
            $sheets = $_POST['available_sheets'];
            $startdate = $_POST['start_date'];
            $endate = $_POST['end_date'];

            $sql = "UPDATE exam SET examName = '$name', examDescription = '$description', qualification = '$qualification', categoryPercentage = '$categoryPer', availableSheets = '$sheets', startDateRegistration = '$startdate', endDateRegistration = '$endate'   WHERE examid = $id";
            // $this->database()->query($sql);     /*  REMOVE COMMENT TO EFFECT IN DATABASE  */            
            echo '<script>alert("Exam Updated");</script>';
            // echo '<script>window.location = "./";</script>';
        }

        // EXAM DELETE
        public function examDelete($id)
        {
            // echo '<script>alert("'.$id.'");</script>';
            $sql = "DELETE FROM `exam` WHERE examId = $id";
            // $this->database()->query($sql);
            echo '<script>alert("Exam Deleted");</script>';
            echo '<script>window.location = "./";</script>';
        }



        public function applyExam($id, $data)
        {
            $examName = $_POST['exam_name'];
            $qualification = $_POST['qualification'];
            $userId = $_POST['userid'];
            $q = array("Matriculation (10th)"=>1, "Higher secondary"=>2, "Diploma"=>3, "graduate"=>4, "post graduate"=>5, "ph.D"=>6);
            $esql = "SELECT qualification FROM exam WHERE examName = '$examName'";
            $resexam = $this->database()->query($esql);
            foreach($resexam as $data){    }
            $checkSql = "SELECT exam_name, userid FROM register_exam WHERE exam_name = '$examName' AND userid = '$userId'";
            $checkRes = $this->database()->query($checkSql);
            $isAlreadyApply = $checkRes->rowcount();
            if($isAlreadyApply == 1)
            {
                echo '<script>alert("You Already Apply For This Exam !");</script>';
            }
            else
            {
                foreach($q as $key => $value)
                {
                    if($qualification == $key)
                    {
                        $a = $value;
                    }
                    if($data[0] == $key)
                    {
                        $b = $value;
                    }
                }
                if($a >= $b)
                {
                    $sql = "INSERT INTO register_exam (exam_name, eQualification, userid) VALUES ('$examName', '$qualification', '$userId')";
                    $this->database()->query($sql);
                    echo '<script>alert("Apply Successfully !");</script>';
                    echo '<script>window.location = "home.php";</script>';
                }
                else
                {
                    echo '<script>alert("You Are Not Qualify For This Exam !");</script>';
                    echo '<script>window.location = "examlist.php";</script>';
                }
            }
        }

        // EXAM UPDATE DETAILS
        public function examUpdates()
        {
            $data = array();
            $sql = "SELECT examName, qualification, availableSheets, startDateRegistration, endDateRegistration FROM exam WHERE createDate BETWEEN '2021-01-01' AND CURRENT_DATE";
            $res = $this->database()->query($sql);
            foreach($res as $update)
            { 
                $data[] = $update;
            }
            return $data;
        }

        public function examInsert($data)
        {
            print_r($_POST);
            $name = $_POST['examName'];
            $examDescription = $_POST['examDescription'];
            $qualification = $_POST['qualificationLevel'];
            $categoryPercentage = $_POST['categoryPercentage'];
            $availableSheets = $_POST['sheetsAvailable'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $sql = "INSERT INTO `exam`(`examName`, `examDescription`, `qualification`, `categoryPercentage`, `availableSheets`, `startDateRegistration`, `endDateRegistration`) VALUES ('$name', '$examDescription', '$qualification', '$categoryPercentage', '$availableSheets' , '$startDate', '$endDate')";
            echo '<script>alert("Exam Inserted");</script>';

            // $conn->query($sql);
        }

        // GENERATE CHALLAN 
        public function challan($id)
        {
            $sql = "SELECT register_exam.reId, register_exam.registerExamDate, register_exam.eQualification, register_exam.exam_name, register_exam.amount, user.userid FROM register_exam, user WHERE register_exam.userid = user.userid = $id";
            $res = $this->database()->query($sql);
            foreach($res as $value){}
            return $value;
        }
        // FAQ
        public function faq()
        {
            $data = array();
            $sql = "SELECT * FROM faq";
            $res = $this->database()->query($sql);
            foreach($res as $value)
            {
                $data[] = $value;
            }
            return $data;
        }
    }
?>