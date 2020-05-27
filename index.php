<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $nome = $_POST['nome'] ?? null;    
    $nome = trim($nome);
    $nome =  stripslashes($nome);
    $nome = htmlspecialchars($nome, ENT_COMPAT); // PADRÃO DE COMPORTAMENTO.
    echo $nome;
    exit;
}
/***
 *  A function htmlspecialchars() converte os seguintes caracteres:
 *  < => &lt less than
 *  > => &gt
 *  " => &quot
 *  ' => &#039
 *  & => &amp
 *  ENT_COMPAT => Este parâmetro converte apenas as aspas duplas, ignorando as Simples.
 *  ENT_NOQUOTES => Este parâmetro converte todos (<,>,&) MENOS as aspas simples e duplas.
 *  ENT_QUOTES => Este parâmetro converte TODOS!
 ***/ 

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
</body>
</html>