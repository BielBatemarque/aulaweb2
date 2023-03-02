<?php
    class Editora{
        public $nome;
        public $telefone;
        public $email;
        public $website;

        function __construct($nome, $telefone, $email, $webSite){
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->website = $webSite;
        }
    }

?>