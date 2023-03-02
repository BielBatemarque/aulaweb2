<?php
      include_once './classes/livro.php';
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
        $book = json_decode($_GET["book"]);
    ?>
        <h1>Dados do Livro</h1>

        <?php
        print_r($book);
        ?>
            
    </header>
    <section>

    </section>
</body>
</html>