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
        .content {
            padding: 20px;
            align-items: center;

        }
    </style>
</head>
<body>
    <div class="navbar">
    <a href="../Painel.php">Home</a>
        <a href="./assets/partidas.php">partidas</a>
        <a href="./assets/noticias.php">noticias</a>
        <a href="./assets/classificacao.php">classificação</a>
        <a href="./assets/estatisticas.php">estatistícas</a>
        <a href="../end-session.php">Sair</a>
    </div>
    <div class="content">
    <h1>Bem-vindo à página sobre futebol</h1>
        <p>Aqui estão algumas curiosidades sobre o futebol:</p>
        <ul>
            <li>O futebol é o esporte mais popular do mundo.</li>
            <li>A Copa do Mundo é o torneio de futebol mais assistido em todo o mundo.</li>
            <li>Pelé é considerado um dos maiores jogadores de futebol de todos os tempos.</li>
            <li>O Brasil é o país com mais títulos de Copa do Mundo.</li>
            <li>A bola de futebol usada na Copa do Mundo de 1970 foi a primeira a ser colorida.</li>
            <li>O jogador de futebol com mais gols em uma única temporada é Lionel Messi.</li>
            <li>A partida de futebol mais longa da história durou 3 dias.</li>
            <li>O jogador mais velho a participar de uma Copa do Mundo tinha 43 anos.</li>
            <li>O recorde de gols em uma única partida de futebol é de 149 gols.</li>
        </ul>
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