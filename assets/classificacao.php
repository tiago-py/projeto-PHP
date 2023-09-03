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
            <td colspan="14" id="tabela-brasileirao-header"><a href="#">Temporada<br><span id="ano">2022 &nbsp;</span></a></td>
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
            <td><img src="img/palmeiras.png" alt="Palmeiras"></td>
            <td class="titulo-clube">Palmeiras</td>
            <td>25</td>
            <td>12</td>
            <td>7</td>
            <td>4</td>
            <td>1</td>
            <td>23</td>
            <td>7</td>
            <td>16</td>
            <td class="titulo-ultimas-cinco">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>2</td>
            <td><img src="img/corinthians.png" alt="Corinthians"></td>
            <td class="titulo-clube">Corinthians</td>
            <td>22</td>
            <td>12</td>
            <td>6</td>
            <td>4</td>
            <td>2</td>
            <td>16</td>
            <td>10</td>
            <td>6</td>
            <td class="titulo-ultimas-cinco">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>3</td>
            <td><img src="img/internacional.png" alt="Internacional"></td>
            <td class="titulo-clube">Internacional</td>
            <td>21</td>
            <td>12</td>
            <td>5</td>
            <td>6</td>
            <td>1</td>
            <td>16</td>
            <td>11</td>
            <td>5</td>
            <td class="titulo-ultimas-cinco">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-azul"></td>
            <td>4</td>
            <td><img src="img/athletico-PR.png" alt="Athletico-PR"></td>
            <td class="titulo-clube">Athletico-PR</td>
            <td>18</td>
            <td>12</td>
            <td>5</td>
            <td>3</td>
            <td>4</td>
            <td>12</td>
            <td>13</td>
            <td>-1</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-laranja"></td>
            <td>5</td>
            <td><img src="img/saoPaulo.png" alt="São Paulo"></td>
            <td class="titulo-clube">São Paulo</td>
            <td>18</td>
            <td>12</td>
            <td>4</td>
            <td>6</td>
            <td>2</td>
            <td>17</td>
            <td>13</td>
            <td>4</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-laranja"></td>
            <td>6</td>
            <td><img src="img/atletico-MG.png" alt="Atletico-MG"></td>
            <td class="titulo-clube">Atletico-MG</td>
            <td>18</td>
            <td>12</td>
            <td>4</td>
            <td>6</td>
            <td>2</td>
            <td>17</td>
            <td>14</td>
            <td>3</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>7</td>
            <td><img src="img/avai.png" alt="Avaí"></td>
            <td class="titulo-clube">Avaí</td>
            <td>17</td>
            <td>12</td>
            <td>5</td>
            <td>2</td>
            <td>5</td>
            <td>15</td>
            <td>17</td>
            <td>-2</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>8</td>
            <td><img src="img/santos.png" alt="Santos"></td>
            <td class="titulo-clube">Santos</td>
            <td>17</td>
            <td>12</td>
            <td>4</td>
            <td>5</td>
            <td>3</td>
            <td>16</td>
            <td>11</td>
            <td>5</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>9</td>
            <td><img src="img/bragantino.png" alt="Bragantino"></td>
            <td class="titulo-clube">Bragantino</td>
            <td>17</td>
            <td>12</td>
            <td>4</td>
            <td>5</td>
            <td>3</td>
            <td>16</td>
            <td>13</td>
            <td>3</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>10</td>
            <td><img src="img/flamengo.png" alt="Flamengo"></td>
            <td class="titulo-clube">Flamengo</td>
            <td>15</td>
            <td>12</td>
            <td>4</td>
            <td>3</td>
            <td>5</td>
            <td>13</td>
            <td>13</td>
            <td>0</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/vitoria.svg" alt="vitória">
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
            <td><img src="img/fluminense.png" alt="Fluminense"></td>
            <td class="titulo-clube">Fluminense</td>
            <td>15</td>
            <td>12</td>
            <td>4</td>
            <td>3</td>
            <td>5</td>
            <td>13</td>
            <td>14</td>
            <td>-1</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-verde"></td>
            <td>12</td>
            <td><img src="img/coritiba.png" alt="Coritiba"></td>
            <td class="titulo-clube">Coritiba</td>
            <td>15</td>
            <td>12</td>
            <td>4</td>
            <td>3</td>
            <td>5</td>
            <td>16</td>
            <td>18</td>
            <td>-2</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>13</td>
            <td><img src="img/america-MG.png" alt="América-MG"></td>
            <td class="titulo-clube">América-MG</td>
            <td>15</td>
            <td>12</td>
            <td>4</td>
            <td>3</td>
            <td>5</td>
            <td>11</td>
            <td>13</td>
            <td>-2</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate"> 
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>14</td>
            <td><img src="img/botafogo.png" alt="Botafogo"></td>
            <td class="titulo-clube">Botafogo</td>
            <td>15</td>
            <td>12</td>
            <td>4</td>
            <td>3</td>
            <td>5</td>
            <td>13</td>
            <td>16</td>
            <td>-3</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota"> 
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>15</td>
            <td><img src="img/ceara.png" alt="Ceará SC"></td>
            <td class="titulo-clube">Ceará SC</td>
            <td>15</td>
            <td>12</td>
            <td>3</td>
            <td>6</td>
            <td>3</td>
            <td>13</td>
            <td>13</td>
            <td>0</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/vitoria.svg" alt="vitória">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td></td>
            <td>16</td>
            <td><img src="img/goias.png" alt="Goiás"></td>
            <td class="titulo-clube">Goiás</td>
            <td>14</td>
            <td>12</td>
            <td>3</td>
            <td>5</td>
            <td>4</td>
            <td>13</td>
            <td>16</td>
            <td>-3</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota"> 
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/empate.svg" alt="empate"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>17</td>
            <td><img src="img/atletico-GO.png" alt="Atlético-GO"></td>
            <td class="titulo-clube">Atlético-GO</td>
            <td>13</td>
            <td>12</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>12</td>
            <td>17</td>
            <td>-5</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota"> 
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/vitoria.svg" alt="vitória"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>18</td>
            <td><img src="img/cuiaba.png" alt="Cuiabá"></td>
            <td class="titulo-clube">Cuiabá</td>
            <td>12</td>
            <td>12</td>
            <td>3</td>
            <td>3</td>
            <td>6</td>
            <td>9</td>
            <td>15</td>
            <td>-6</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/derrota.svg" alt="derrota"> 
                <img src="img/derrota.svg" alt="derrota">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>19</td>
            <td><img src="img/juventude.png" alt="Juventude"></td>
            <td class="titulo-clube">Juventude</td>
            <td>10</td>
            <td>12</td>
            <td>2</td>
            <td>4</td>
            <td>6</td>
            <td>11</td>
            <td>21</td>
            <td>-10</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/vitoria.svg" alt="vitória">
                <img src="img/empate.svg" alt="empate">
            </td>  
            <td class="tabela-colunas-bordas"></td>
        </tr>
        <tr>
            <td class="borda-vermelho"></td>
            <td>20</td>
            <td><img src="img/fortaleza.png" alt="Fortaleza"></td>
            <td class="titulo-clube">Fortaleza</td>
            <td>7</td>
            <td>12</td>
            <td>1</td>
            <td>4</td>
            <td>7</td>
            <td>9</td>
            <td>16</td>
            <td>-7</td>
            <td class="titulo-ultimas-cinco"> 
                <img src="img/derrota.svg" alt="derrota">
                <img src="img/empate.svg" alt="empate">
                <img src="img/empate.svg" alt="empate">
                <img src="img/vitoria.svg" alt="vitória">
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