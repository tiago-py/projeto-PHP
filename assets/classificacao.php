<?php
require_once("../session.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/table.css" media="screen">
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
        gap: 10px;
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
    
    
    
    <table class="tabela-brasileirao">
        <tr>
            <td colspan="14" id="tabela-brasileirao-header"><a href="#">Temporada<br><span id="ano">2023 &nbsp;</span></a></td>
        </tr>
        <tr>
            <th class="tabela-colunas-bordas"></th>
            <th colspan="3" class="titulo-clube">Clube</th>
            <th>Pts</th>
            <th>PJ</th>
            <th>VIT</th>
            <th>E</th>
            <th>DER</th>
            <th>GP</th>
            <th>GC</th>
            <th>SG</th>
            <th>Últimas cinco</th>  
            <th class="tabela-colunas-bordas"></th>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>1</td>
            <td><img src="img/botafogo.png" alt="Palmeiras"></td>
            <td class="titulo-clube">botafogo</td>
            <td>51</td>
            <td>22</td>
            <td>16</td>
            <td>3</td>
            <td>3</td>
            <td>39</td>
            <td>13</td>
            <td>26</td>
            <td class="titulo-ultimas-cinco">
            <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>2</td>
            <td><img src="img/palmeiras.png" alt="Corinthians"></td>
            <td class="titulo-clube">palmeiras</td>
            <td>41</td>
            <td>22</td>
            <td>11</td>
            <td>8</td>
            <td>3</td>
            <td>37</td>
            <td>17</td>
            <td>20</td>
            <td class="titulo-ultimas-cinco">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>3</td>
            <td><img src="img/gremio.png" alt="Internacional"></td>
            <td class="titulo-clube">gremio</td>
            <td>39</td>
            <td>21</td>
            <td>12</td>
            <td>3</td>
            <td>6</td>
            <td>34</td>
            <td>25</td>
            <td>9</td>
            <td class="titulo-ultimas-cinco">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>4</td>
            <td><img src="img/flamengo.png" alt="Athletico-PR"></td>
            <td class="titulo-clube">flamengo</td>
            <td>39</td>
            <td>22</td>
            <td>11</td>
            <td>6</td>
            <td>5</td>
            <td>36</td>
            <td>27</td>
            <td>9</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-laranja"></td>
            <td>5</td>
            <td><img src="img/fluminense.png" alt="São Paulo"></td>
            <td class="titulo-clube">fluminense</td>
            <td>38</td>
            <td>22</td>
            <td>11</td>
            <td>5</td>
            <td>6</td>
            <td>31</td>
            <td>22</td>
            <td>9</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/vitoria.svg" alt="vitória">
            <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-laranja"></td>
            <td>6</td>
            <td><img src="img/bragantino.png" alt="Atletico-MG"></td>
            <td class="titulo-clube">bragantino</td>
            <td>36</td>
            <td>22</td>
            <td>9</td>
            <td>9</td>
            <td>4</td>
            <td>29</td>
            <td>21</td>
            <td>8</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>7</td>
            <td><img src="img/athletico-pr.png" alt="Avaí"></td>
            <td class="titulo-clube">athletico-PR</td>
            <td>34</td>
            <td>22</td>
            <td>9</td>
            <td>7</td>
            <td>6</td>
            <td>32</td>
            <td>26</td>
            <td>6</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/empate.svg" alt="empate">
            <img src="img/empate.svg" alt="empate">
            <img src="img/empate.svg" alt="empate">
            <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>8</td>
            <td><img src="img/fortaleza.png" alt="Santos"></td>
            <td class="titulo-clube">fortaleza</td>
            <td>32</td>
            <td>22</td>
            <td>9</td>
            <td>5</td>
            <td>8</td>
            <td>25</td>
            <td>21</td>
            <td>4</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/derrota.svg" alt="derrota">
            <img src="img/vitoria.svg" alt="vitória">
            <img src="img/vitoria.svg" alt="vitória">
            <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>9</td>
            <td><img src="img/atletico-MG.png" alt="Bragantino"></td>
            <td class="titulo-clube">atletico-MG</td>
            <td>31</td>
            <td>22</td>
            <td>8</td>
            <td>7</td>
            <td>7</td>
            <td>25</td>
            <td>19</td>
            <td>6</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/empate.svg" alt="empate">
            <img src="img/vitoria.svg" alt="vitória">
            <img src="img/derrota.svg" alt="derrota">
            <img src="img/vitoria.svg" alt="vitória">
            <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>10</td>
            <td><img src="img/cuiaba.png" alt="Flamengo"></td>
            <td class="titulo-clube">cuiaba</td>
            <td>28</td>
            <td>22</td>
            <td>8</td>
            <td>4</td>
            <td>10</td>
            <td>21</td>
            <td>27</td>
            <td>-6</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>11</td>
            <td><img src="img/saopaulo.png" alt="Fluminense"></td>
            <td class="titulo-clube">saopaulo</td>
            <td>28</td>
            <td>21</td>
            <td>7</td>
            <td>7</td>
            <td>7</td>
            <td>25</td>
            <td>21</td>
            <td>4</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/derrota.svg" alt="derrota">
            <img src="img/empate.svg" alt="empate">
            <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>12</td>
            <td><img src="img/cruzeiro.png" alt="Coritiba"></td>
            <td class="titulo-clube">cruzeiro</td>
            <td>26</td>
            <td>22</td>
            <td>6</td>
            <td>8</td>
            <td>8</td>
            <td>20</td>
            <td>20</td>
            <td>0</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>13</td>
            <td><img src="img/corinthians.png" alt="América-MG"></td>
            <td class="titulo-clube">corinthians</td>
            <td>26</td>
            <td>21</td>
            <td>6</td>
            <td>8</td>
            <td>7</td>
            <td>22</td>
            <td>23</td>
            <td>-1</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>14</td>
            <td><img src="img/internacional.png" alt="Botafogo"></td>
            <td class="titulo-clube">internacional</td>
            <td>26</td>
            <td>22</td>
            <td>6</td>
            <td>8</td>
            <td>8</td>
            <td>17</td>
            <td>24</td>
            <td>-7</td>
            <td class="titulo-ultimas-cinco"> 
                <<img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate"> 
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>15</td>
            <td><img src="img/goias.png" alt="Ceará SC"></td>
            <td class="titulo-clube">goias</td>
            <td>25</td>
            <td>22</td>
            <td>6</td>
            <td>7</td>
            <td>9</td>
            <td>20</td>
            <td>29</td>
            <td>-9</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>16</td>
            <td><img src="img/bahia.png" alt="Goiás"></td>
            <td class="titulo-clube">bahia</td>
            <td>22</td>
            <td>22</td>
            <td>5</td>
            <td>7</td>
            <td>10</td>
            <td>23</td>
            <td>29</td>
            <td>-6</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/empate.svg" alt="empate"> 
            <img src="img/derrota.svg" alt="derrota"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>17</td>
            <td><img src="img/santos.png" alt="Atlético-GO"></td>
            <td class="titulo-clube">santos</td>
            <td>21</td>
            <td>22</td>
            <td>5</td>
            <td>6</td>
            <td>11</td>
            <td>21</td>
            <td>36</td>
            <td>-15</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>18</td>
            <td><img src="img/vasco da gama.png" alt="Cuiabá"></td>
            <td class="titulo-clube">vasco da gama</td>
            <td>17</td>
            <td>21</td>
            <td>4</td>
            <td>5</td>
            <td>12</td>
            <td>16</td>
            <td>31</td>
            <td>-15</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>19</td>
            <td><img src="img/america-MG.png" alt="Juventude"></td>
            <td class="titulo-clube">america-MG</td>
            <td>16</td>
            <td>21</td>
            <td>4</td>
            <td>4</td>
            <td>13</td>
            <td>24</td>
            <td>45</td>
            <td>-21</td>
            <td class="titulo-ultimas-cinco"> 
            <img src="img/vitoria.svg" alt="vitória">
            <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>20</td>
            <td><img src="img/coritiba.png" alt="Fortaleza"></td>
            <td class="titulo-clube">coritiba</td>
            <td>14</td>
            <td>21</td>
            <td>3</td>
            <td>5</td>
            <td>13</td>
            <td>21</td>
            <td>42</td>
            <td>-21</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr class="legenda">
            <td colspan="14">
                <table>
                    <tr>
                        <th>Qualificação/Rebaixamento</th><th>Últimas cinco partidas</th>
                    </tr>
                    <tr>
                        <td><img src="img/quadradoAzul.png" alt="Libertadores">&nbsp;&nbsp;&nbsp;&nbsp;Fase de Grupos da copa libertadores</td><td><img src="img/vitoria.svg" alt="vitória"> vitória</td>
                    </tr>
                    <tr>
                        <td><img src="img/quadradoLaranja.png" alt="Pre-Libertadores">&nbsp;&nbsp;&nbsp;&nbsp;Qualificatória da Copa Libertadores</td><td><img src="img/empate.svg" alt="empate"> empate</td>
                    </tr>
                    <tr>
                        <td><img src="img/quadradoVerde.png" alt="Sul-Americana">&nbsp;&nbsp;&nbsp;&nbsp;Fase de grupos da Copa Sul-Americana</td><td><img src="img/derrota.svg" alt="derrota"> derrota</td>
                    </tr>
                    <tr>
                        <td><img src="img/quadradoVermelho.png" alt="Rebaixamento">&nbsp;&nbsp;&nbsp;&nbsp;Rebaixamento</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
</body>
</html>