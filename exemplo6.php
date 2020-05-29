<?php


/***
 *  isset => O Campo existe  ? 
 *  empty => O Campo existe e esta vazio ? 
 ***/

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    var_dump( isset($_POST['nome'])); // TRUE
    var_dump( empty($_POST['nome']));
   
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
</body>
</html>