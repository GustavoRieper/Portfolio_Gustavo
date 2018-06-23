<?php include 'admin/conexao.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Portfólio - Gustavo Rieper</title>
        <meta charset="utf8">
        <link rel="stylesheet" type="text/css" href="Paginas/CSS/index.css";>
        <link rel="stylesheet" type="text/css" href="Paginas/CSS/projetos.css";>
        <link rel="shortcut icon" type="image/png" href="IMG/logo_black.png"/>
        <style>
            #projetos{
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
        <h2 id="proj">Projetos em Andamento</h2>
        <hr id="hr_proj">
        <div class="proj_andamento">
        <ul id="movieposters">
            <?php
                mysqli_set_charset($conexao,'utf8'); 
                $sql = "SELECT * FROM `projetos` ORDER BY data DESC LIMIT 3"; 
                $resultado = mysqli_query($conexao,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $nome       = $linha["nome"];
                    $descricao  = $linha["descricao"];
                    $imagem     = $linha["imagem"];
                    $link       = $linha["link"];
                    echo("<a href='http://"); echo($link); echo("'"); echo("target='_blank'/>");
                            echo("<li>");
                              echo("<img id='cards' src='"); echo($imagem); echo("'"); echo("alt='"); echo($name); echo("'"); echo("/>");
                              echo("<div class='movieinfo'>");
                                 echo("<h3>"); echo($nome); echo("</h3>");
                                 echo("<p>"); echo($descricao); echo("</p>");
                              echo("</div>");
                           echo("</li>");
                        echo("</a>");
                };
            ?>
        </div>
        <hr id="hr_proj">
        
        <br><br><br><br><br><br><br><br><br><br>
    </body>
</html>