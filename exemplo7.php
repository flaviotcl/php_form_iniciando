<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
   extract($_POST)     ;
   var_dump($nome, $idade);

   $data = compact('nome','idade', '_POST');
   var_dump($data);
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
        <input type="text" name="idade" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>