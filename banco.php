<?php

    class Banco{

        private $pdo;

        public function __construct(){
            try{
                $this->pdo = new PDO("mysql:dbname=estacao4;host=localhost","root", "root");

            }catch (PDOException $e){

            }
        }

    }

?>