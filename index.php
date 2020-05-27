<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    echo $_POST['nome'];
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nome" id="">
        <input type="submit" value="Enviar">
    </form>

    <a href="/index.php/?nome=Flavio">NOME</a>
    <p>O <?php if($_GET['nome']){ echo $_GET['nome'];} ?> clicou no Link acima.</p>
</body>
</html>