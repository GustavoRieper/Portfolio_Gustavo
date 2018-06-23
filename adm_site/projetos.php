<!DOCTYPE html>
<html>
    <head>
        <title>Admin - Projetos</title>
        <link rel="stylesheet" type="text/css" href="../Paginas/css_adm/projetos.css">
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
                <h2>Publicar Projetos</h2>

                <form method="post" action="insere_projetos.php">
                    <input type="text" name="nome" placeholder="Nome do Projeto" required autofocus>
                    <br>                
                    <textarea required name="txt_postagem" maxlength="180" onkeyup="limite_textarea(this.value)" id="texto"></textarea><br>
                    <span id="cont">300 </span> <span id="restante">Restantes</span> <br>
                    <br>
                    <input type="text" name="imagem" placeholder="link da Imagem" required>
                    <br>
                    <input type="text" name="link" placeholder="Link do Projeto" required>
                    <br>
                    <input type="date" name="data" placeholder="Data" required>
                    <br>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </form>            
            </div>
        </div>
    </body>
</html>