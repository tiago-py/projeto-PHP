<?php
require_once("../session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
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

        footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: absolute;
        bottom: 0;
        width: 100%;
        }

        .names {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 10px;
        }

        .name {
        font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="../Painel.php">Home</a>
        <a href="./santos.php">Santos</a>
        <a href="./cruzeiro.php">Cruzeiro</a>
        <a href="./palmeiras.php">Palmeiras</a>
        <a href="./paysandu.php">Paysandu</a>
        <a href="../end-session.php">Sair</a>
    </div>

    <footer>
    <div class="names">
      <div class="name">Tiago Braga</div>
      <div class="name">Enzo Monzolli</div>
      <div class="name">Gustavo Santos</div>
      <div class="name">Luis Felipe</div>
      <div class="name">Gabriel Neto</div>
    </div>
  </footer>
</body>
</html>