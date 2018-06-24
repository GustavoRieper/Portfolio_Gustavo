<?php include 'admin/conexao.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Portfólio - Gustavo Rieper</title>
        <meta charset="utf8">
        <link rel="stylesheet" type="text/css" href="Paginas/CSS/index.css";>
        <link rel="stylesheet" type="text/css" href="Paginas/CSS/pesquisa.css";>
        <link rel="shortcut icon" type="image/png" href="IMG/logo_black.png"/>
        <style>
            #pesquisa{
            height: auto;
            width: auto;
            font-size: 30px;
            transition: all 0.5s;
            background-color: darkorange;
            color: #FFF !important; 
            padding: 15px;
            }
        </style>
    </head>
    
    <body>
        <?php include 'menu-principal.php'; ?>
        <h2 id="pesq">Pesquisas</h2>
        <hr>
        <div class="box_pesquisa">
             <?php
                mysqli_set_charset($conexao,'utf8'); 
                $sql = "SELECT * FROM `pesquisas` ORDER BY data DESC"; 
                $resultado = mysqli_query($conexao,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $titulo     = $linha["titulo"];
                    $descricao  = $linha["descricao"];
                    $imagem     = $linha["imagem"];
                    $link       = $linha["link"];
                    echo("<div class='box'>");
                        echo("<a href='http://"); echo($link); echo("' target='_blank'/>");
                          echo("<img src='"); echo($imagem); echo("'"); echo("alt='"); echo($titulo); echo("'/>");
                                 echo("<h2>"); echo($titulo); echo("</h2>");
                                 echo("<p>"); echo($descricao); echo("</p>");
                        echo("</a>");
                      echo("</div>");

                };
            ?>

        </div>
      
        
        <br><br><br><br><br><br><br><br><br><br>
    </body>
</html>