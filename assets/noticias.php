<?php
require_once("../session.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
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
        <a href="./partidas.php">partidas</a>
        <a href="./noticias.php">noticias</a>
        <a href="./classificacao.php">classificação</a>
        <a href="./estatisticas.php">estatistícas</a>
        <a href="../end-session.php">Sair</a>
    </div>
    <h1> </h1> 
    <div class ="container">
        <div class="item">
        


        <header>
        <h1>Noticias</h1>
    </header>
    <main>
        <div class="gallery-container">
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/cbf-anuncia-alteracao-de-data-de-jogo-entre-sao-paulo-e-coritiba?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img001.png" alt="Chick Hicks">
               
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/corinthians-celebra-113-anos-de-historia?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img002.png" alt="Doctor Hudson">
               
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/palmeiras-109-anos-de-muita-tradicao-e-glorias?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img003.png" alt="Fillmore">
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/arena-mrv-recebe-atletico-mg-x-santos-pela-21a-rodada-do-brasileirao?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img004.png" alt="Flo1111">
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/presidente-da-cbf-parabeniza-clubes-pelo-sucesso-do-brasileirao?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img005.png" alt="Guido">
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/primeiro-turno-do-brasileirao-assai-tem-recorde-de-publico?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img006.png" alt="lightning-mcqueen">
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/botafogo-completa-119-anos?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img007.png" alt="Lizzie">
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/pelo-4o-mes-consecutivo-tiquinho-soares-e-eleito-o-craqueassai?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img008.png" alt="Luigi">
            </a>
            <a href="https://www.cbf.com.br/futebol-brasileiro/noticias/campeonato-brasileiro-serie-a/botafogo-pode-igualar-recorde-do-corinthians-no-1o-turno-do-brasileira?csrt=17139640838424484809" class="gallery-items">
                <img src="img/img010.png" alt="Mack">
            </a>
            </div>        
    
    
    
</body>
</html>