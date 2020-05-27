<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
   
   $idade = (isset($_POST['idade'] ) ) ? $_POST['idade']: null;
   
   if( is_null($idade) || $idade === '' )
   {
       die('Vc não informou sua idade.');
   }
   
   $idade = (int)$_POST['idade'];

   if( $idade < 18)
   {
        die("Menor de 18 anos !");
   }

   echo "Ok, sua idade é ".$idade;


   $idade_string = (string)$idade;
   
   var_dump($idade_string, $idade);

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
        <input type="text" name="idade" placeholder="idade"><br>       
        <input type="submit" value="Enviar">
    </form>

</body>
</html>