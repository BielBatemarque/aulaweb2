<?php
    include_once './classes/autor.php';
    include_once './classes/editora.php';
    include_once './classes/livro.php';




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        img{
            width: 50px;
        }

    </style>

        </head>
            <header>
                <div>
                    <h1> Listagem de Livros</h1>
                </div>
            </header>
        <body>
    <?php
        $autor = new Autor('gabriel', 'biel@gmail.com', 'www.meulivro.com');
        $livro1 = new Livro('10 razões pelas quais js é melhor que php', 5, 100, 2022, 6);
        $livro2 = new Livro('+10 razões que provam que js é melhor que php', 5 , 60, 2023, 8);
        $livro3 = new Livro('+20 razões que provam que js é melhor que php', 5 , 60, 2023, 8);
        $livro4 = new Livro('+30 razões que provam que js é melhor que php', 5 , 60, 2023, 8);

       $editora = new Editora('rebert richards', '(12) 997247-0537', 'rebertRichards@gmail.com', 'www.editorarebert.com.br');

       $arrayLivros = [$livro1, $livro2, $livro3, $livro4];
    ?>
        <div>
            <table>
                <tr>
                    <td><h3>Nome do livro</h3></td>
                    <td><h3>Nome do Autor</h3></td>
                    <td><h3>Nome da Editora</h3></td>
                    <td><h3>Detalhes</h3></td>
                </tr>

                <?php
                $aux = 0;
                    foreach($arrayLivros as $linha){                
                ?>
                <tr>
                    <td><p name="titulo"><?php print_r($linha->titulo)  ?></p></td>
                    <td><p><?php print_r($autor->nome)  ?></p></td>
                    <td><p><?php print_r($editora->nome)  ?></p></td>
                    <
                    <td><a href="./detalhesLivro.php?id=<?php echo $aux;?>" target="_blank"><img src="./assets/mais.jpg"></a></td>
                </tr>
                <?php
                $aux++;
                    }
                ?>
            </table>    
        </div>

    </body>
    </html>

