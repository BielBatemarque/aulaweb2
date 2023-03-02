<?php
    class Livro{
        public $titulo;
        public $isbn;
        public $nmPaginas;
        public $anoDePublicacao;
        public $numEdicao;


        function __construct($titulo, $isbn, $nmPaginas, $anoDePublicacao, $numEdicao){
            $this->titulo = $titulo;
            $this->isbn = $isbn;
            $this->nmPaginas = $nmPaginas;
            $this->anoDePublicacao = $anoDePublicacao;
            $this->numEdicao = $numEdicao;
        }

    }

?>