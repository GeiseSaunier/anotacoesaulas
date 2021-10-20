<?php
    class db
    {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $database = 'acesso';

        public function conecta_mysql()
        {
            $con = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
            mysqli_set_charset($con, 'utf8');
            if(mysqli_connect_errno())
            {
                echo 'Houve um erro ao tentar se conectar com o banco MySql: ' . mysqli_connect_errno();
            }
            return $con;
        }
    }
?>