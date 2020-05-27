<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //print_r(filter_list());
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    var_dump($nome);
    var_dump($email); 

/***
    $data =  filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump($data);
***/     
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
        <input type="text" name="email" id="">
        <input type="submit" value="Enviar">
    </form>    
</body>
</html>