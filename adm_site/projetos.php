<!DOCTYPE html>
<html>
    <head>
        <title>Admin - Projetos</title>
    </head>
    
    <body>
        <div class="painel">
            <h2>Publicar Projetos</h2>
            
            <form method="post" action="insere_projetos.php">
                <input type="text" name="nome" placeholder="Nome do Projeto" required autofocus>
                <br>
                <input type="text" name="descricao" placeholder="Descrição" required>
                <br>
                <input type="text" name="imagem" placeholder="link da Imagem" required>
                <br>
                <input type="text" name="link" placeholder="Link do Projeto" required>
                <br>
                <input type="date" name="data" placeholder="Data" required>
                <br>
                <input type="submit" value="Enviar">
            </form>            
        </div>
    </body>
</html>