<?php
    class DbConnection
    {
        private $server = "localhost";
        private $user = "root";
        private $pass = "";

        protected function database()
        {
            try
            {
                $conn = new PDO('mysql:host='.$this->server.';dbname=competitive', $this->user, $this->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch (PDOException $e)
            {
                echo $e->getMessage();
            }
        }
    }

?>