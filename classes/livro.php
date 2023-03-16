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
    $livro1 = new Livro('10 razões pelas quais js é melhor que php', 5, 100, 2022, 6);
    $livro2 = new Livro('+10 razões que provam que js é melhor que php', 1 , 60, 2023, 9);
    $livro3 = new Livro('+20 razões que provam que js é melhor que php', 2 , 60, 2023, 8);
    $livro4 = new Livro('+30 razões que provam que js é melhor que php', 3 , 60, 2023, 4);
?>