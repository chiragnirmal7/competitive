<?php
// require("databaseClass.php");
    class Book extends DbConnection
    {

        // BOOK DETAILS BY ID
        public function bookListById($id)
        {
            $sql = "SELECT * FROM books WHERE bookId = $id";
            $res = $this->database()->query($sql);
            foreach($res as $row){  }
            return $row;
        }
        // BOOK LIST
        public function bookList()
        {
            $a = array();
            $sql = "SELECT * from books";
            $res = $this->database()->query($sql);
            foreach($res as $value)
            {
                $a[] = $value;
            }
            return $a;
        }

        // BOOK UPDATE
        public function bookUpdate($id, $data)
        {
            $data = $_POST['des'];
            $sql = 'UPDATE books SET bookDescription="'.$data.'" WHERE bookId = '.$id.'';
            $this->database()->query($sql);
            echo '<script>alert("Updated");</script>';
            echo '<script>window.location = "./";</script>';
        }

        // BOOK DELETE
        public function bookDelete($id)
        {
            // echo '<script>alert("'.$id.'");</script>';
            $sql = "DELETE FROM books WHERE bookId = $id";
            // $this->database()->query($sql);
            echo '<script>alert("Book Deleted");</script>';
            echo '<script>window.location = "./";</script>';
        }

        // BOOK UPDATE DETAILS
        public function bookUpdates()
        {
            $data = array();   
            $sql = "SELECT bookName, bookDescription, bookIssueDate FROM books WHERE last_update BETWEEN '2021-01-01' AND CURRENT_DATE";
            $res = $this->database()->query($sql);
            foreach($res as $update)
            {
                $data[] = $update;
            }
            return $data;
        }

        public function bookInsert($data)
        {
            $bookName=  $_POST["bookName"];
            $bookDescription = $_POST['bookDescription'];
            $fileName = $_FILES["pdfFile"]["name"];
            // echo $fileName;
            // echo $_FILES['pdfFile']['size'];
            // echo $_FILES['pdfFile']['type'];
            // echo $_FILES['pdfFile']['error'];
            // echo $_FILES['pdfFile']['tmp_name'];
            // $location = "upload/".$fileName;

            // $sql = 'INSERT INTO books(bookName, bookDescription, filename) VALUES ('."$bookName".', '."$bookDescription".', '."$fileName".')';
            $sql = "INSERT INTO books(bookName, bookDescription, fileName) VALUES ('$bookName', '$bookDescription', '$fileName')";
            $this->database()->query($sql);
            echo "<script>alert('Success');</script>";
            if(file_exists('upload/' . $_FILES['pdfFile']['name']))
            {
                die("FileName Already Exists");
            }
            else
            {
                if(move_uploaded_file($_FILES['pdfFile']['tmp_name'], $location))
                {
                    echo "<script>alert('su');</script>";
                }    
                else
                {
                    echo "<script>alert('No');</script>";
                }
            }
        }
    }
?>