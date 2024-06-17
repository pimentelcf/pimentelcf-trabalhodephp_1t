<?php

    session_start();
    if(empty($_SESSION)){
        echo"<script>location.href='index.html';</script>";
    }
    include_once('conexao.php');
    $logado =$_SESSION['usuario'];
    $sql = "select * from cliente";
    $result = $con->query($sql);
    //print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>

<br>
    <?php
        echo"LISTANDO DADOS DA TABELA CLIENTE";
        echo"<BR>";
        echo"<a href='logout.php'> sair </a>";
    ?>
   
</body>
</html>