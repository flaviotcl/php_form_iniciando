<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //echo $_POST['nome'];
    var_dump($_POST);
    var_dump($_FILES);
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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="nome" id=""><br>
        <input type="email" name="email" id=""><br>
        <input type="color" name="color" id=""><br>
        <input type="date" name="date" id=""><br>
        <input type="datetime" name="datetime" id=""><br>
        <input type="file" name="file" id=""><br>
        <input type="number" name="number" id=""><br>

        <br>
        <input type="radio" name="sexo" value="Masculino">
        <input type="radio" name="sexo" value="Feminino">

        <br>
        <input type="checkbox" name="revista" value="Info">

        <input type="submit" value="Enviar">
    </form>

    <a href="/index.php/?nome=Flavio">NOME</a>
    <p>O <?php if($_GET['nome']){ echo $_GET['nome'];} ?> clicou no Link acima.</p>
</body>
</html>