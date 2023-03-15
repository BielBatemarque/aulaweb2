<?php
     require_once './classes/livro.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    <?php
        $book = $_GET['id'];
        $codBook = intval($book);
        // print_r($codBook);
        $livroCarregado;
        if($codBook === 0){
            $livroCarregado = $livro1;
        }
        if($codBook === 1){
            $livroCarregado = $livro2;

        }

        if($codBook === 2){ 
            $livroCarregado = $livro3;
        }

        if($codBook === 3){
            $livroCarregado = $livro4;
        }
    ?>
        <h1>Dados do Livro</h1>
        
    </header>
    <section>

        <h1>Detalhes do livro</h1>
            <table>
               <tr>
                <td>ISBN:</td>
                <td><?php echo $livroCarregado->isbn; ?></td>
               </tr>
               <tr>
               <td>Titulo:</td>
               <td><?php echo $livroCarregado->titulo; ?></td>
               </tr>
               <tr>
               <td>Num. Paginas:</td>
               <td><?php echo $livroCarregado->nmPaginas?></td>
               </tr>
               <tr>
               <td>Edição:</td>
               <td><?php echo $livroCarregado->numEdicao; ?></td>
               </tr>
               <tr>
               <td>Editora:</td>
               <td>rebert richards</td>
               </tr>
               <tr>
               <td>Autor:</td>
               <td>Gabriel</td>
               </tr>
               <tr>
               <td>Ano:</td>
               <td><?php echo $livroCarregado->anoDePublicacao ?></td>
               </tr>
            </table>

    </section>
</body>
</html>