<!DOCTYPE html>
<html>
    <head>
        <title>Admin - Pesquisa</title>
        <link rel="stylesheet" type="text/css" href="../Paginas/css_adm/pesquisa.css">

        <meta charset="utf-8">
        <script>
            function limite_textarea(valor) {
                quant = 180;
                total = valor.length;
                if(total <= quant) {
                    resto = quant - total;
                    document.getElementById('cont').innerHTML = resto;
                } else {
                    document.getElementById('texto').value = valor.substr(0,quant);
                }
            }        
        </script>
    </head>
    
    <body>
        <?php include 'menu.php'; ?>
        <div class="content">
            <div class="painel">
<!--                <img src="">-->
                <h2>Publicar Pesquisa</h2>

                <form method="post" action="insere_pesquisa.php" enctype="multipart/form-data">
                    <h3>Inserir Card</h3>
                    <input type="text" name="titulo" placeholder="Título da Pesquisa" required autofocus>
                    <br>                
                    <textarea required name="descricao" maxlength="180" onkeyup="limite_textarea(this.value)" id="texto"></textarea><br>
                    <span id="cont">180 </span> <span id="restante">Restantes</span> <br>
                    <br>
                    <input type="text" name="link" placeholder="Link da Pesquisa" required>
                    <br>
                    <input type="date" name="data" placeholder="Data" required>
                    <br>
                    <input type="file" name="imagem" id="imagem" required>
                    <br> <br> <br>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <h3>Pesquisa</h3>
                    <br>
                    <?php include 'insere_texto.php'; ?>
                    <br>
                    <br>
                    
                    <span>Banner</span><input type="file" name="imagem" id="imagem" required>
                    <br> <br> <br>
                    <input type="submit" name="cadastrar" value="Enviar">
                    <input type="reset" value="Limpar">
                </form> 
            </div>
        </div>
    </body>
</html>