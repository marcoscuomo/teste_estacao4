<?php

    require '../banco.php';

    class Produto{

        private $id;
        private $nome;
        private $descricao;
        private $preco;

        //Construtor
        public function __construct(){

        }

        //Getters e Setters
        public function getId()
        {
            return $this->id;
        }


        public function setId($id)
        {
            $this->id = $id;
        }


        public function getNome()
        {
            return $this->nome;
        }


        public function setNome($nome)
        {
            $this->nome = $nome;
        }


        public function getDescricao()
        {
            return $this->descricao;
        }


        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }


        public function getPreco()
        {
            return $this->preco;
        }


        public function setPreco($preco)
        {
            $this->preco = $preco;
        }


        //Função para pegar os dados do formulário
        private function getValores(){
            $this->$this->setNome(addslashes($_POST['nome']));
            $this->setDescricao(addslashes($_POST['descricao']));
            $this->setPreco(addslashes($_POST['preco']));
        }


    }



?>