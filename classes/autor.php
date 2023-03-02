<?php
    class Autor{
        public $nome;
        public $email;
        public $webSite;

        function __construct($nome, $email, $website){
            $this->nome = $nome;
            $this->email = $email;
            $this->webSite = $website;
        }
    }


?>