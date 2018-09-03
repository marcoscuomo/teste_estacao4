<?php

    class Banco{

        private $pdo;

        //Construtor
        public function __construct(){
            try{
                $this->pdo = new PDO("mysql:dbname=estacao4;host=localhost","root", "root");
            }catch (PDOException $e){
                echo "Falha ao se conectar ao banco de dados " .$e -> getMessage();
            }
        }



        //Função inserir
        public function inserir($nome, $descricao, $preco){

        }

    }

?>