<!DOCTYPE html>
<html>
    <head>
        <title>Construtora Galdino | Contato</title>
        <link rel="stylesheet" type="text/css" href="Paginas/CSS/contato.css">
        <link rel="shortcut icon" type="image/png" href="IMG/logo_black.png"/>
        <script>
                $(document).ready(function(){
            $('#form').submit(function(){

                var dados = $(this).serialize(); 
                // dados = "nome=" + nome.value + "&email=" + email.value;

                $.ajax({
                    type: "POST",
                    url: "admin/contato.php",
                    data: dados,
                    success: function(RESPOSTA_PHP)
                    {
                        RESULTADO.innerHTML = RESPOSTA_PHP;
                    }
                });

                return false; // Usado para não dar um refresh.
            });


        });
        </script>
        <script>
            function limite_textarea(valor) {
                quant = 300;
                total = valor.length;
                if(total <= quant) {
                    resto = quant - total;
                    document.getElementById('cont').innerHTML = resto;
                } else {
                    document.getElementById('texto').value = valor.substr(0,quant);
                }
            }        
        </script>
        <style>
            #contato{
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
        <?php include 'menu-principal.php'?>       
        <div id="t3">
            <div id="txt_t3">
                <p>ENTRE EM CONTATO</p>
            </div>
                <div id="Divformulario">
                    <form method="post" action="admin/contato.php" id="form">
                        <input type="text" name="nome" id="nome" placeholder="Nome" size="40px" required autocomplete="off" autofocus><br>
                        
                        <input type = "email" name="email"   id="email" placeholder="Email" size="40px"  required autocomplete="off"><br>
                        
                        <textarea name="msg" id="msg" placeholder="Mensagem" rows="10" cols="39" wrap="virtual" maxlength="300" required autocomplete="off" onkeyup="limite_textarea(this.value)" id="texto"></textarea><br>                        
                        <span id="cont">300 </span> <span id="restante">Restantes</span> <br>
                        
                        <div id="RESULTADO"></div>
                        <input type="submit" id="btn_enviar" value="ENVIAR"><br>
                    </form>
                </div>
            <br>
        </div>
    </body>
</html>