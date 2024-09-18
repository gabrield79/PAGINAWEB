<?php

        public $server = 'localhost';
        public $user = 'root';
        public $pass = '';
        public $dbname = 'basedatos';
        public $db_port="3306";

        $con1=mysqli_connect($server,$user,$pass,$dbname,$db_port);

        if(!$con1){
            echo("Failled")
        }
        else {
            echo("Successfull")
        }


?>
