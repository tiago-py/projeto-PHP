<?php
require_once("session.php");
//fazer as alterações da página principal e criar mais 4
//tenta colocar um header e nesse header 4 link sendo eles "sobre" "contato" "datas especiais" "sair" "curiosidades" ou coisas parecidas
//tentar colocar um footer com o nome dos integrantes do grupo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar{
            background-color: #333;
            overflow:hidden;
            box-shadow:0px 0px 3px #ccc;
        }
        .navbar a{
            float:left;
            display:block;
            color:white;
            text-align:center;
            padding: 14px 16px;
            text-decoration: none;

        }
        .navbar a:hover{
            background-color:#ccc;
            color:black;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="./Painel.php">Home</a>
        <a href="./assets/santos.php">Santos</a>
        <a href="./assets/cruzeiro.php">Cruzeiro</a>
        <a href="./assets/palmeiras.php">Palmeiras</a>
        <a href="./assets/paysandu.php">Paysandu</a>
        <a href="./end-session.php">Sair</a>
    </div>
</body>
</html>