<?php
     session_start();
$_SESSION['login'] = $_SESSION['login'] + 0;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="icon" type="image/png" href="../IMG/logo_black.png" sizes="192x150">
        <link rel="stylesheet" type="text/css" href="login.css">
        <meta charset="utf-8">
        <title>Login - Find</title>
        
    </head>

    <body>    
        <img id="img_fundo" src="https://images.pexels.com/photos/574080/pexels-photo-574080.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        <div class="box bg-3">
            <a href="../home.php">
                <button class="button button--pipaluk button--inverted  button--round-s button--text-thick">Voltar ao Site</button>	
            </a>
        </div>
        
        
        <div class="box_login">
            <form action="../admin/autenticacao.php" id="login_box" autocomplete="off" method="post">
                <img id="logo" src="../IMG/logo_black.png" style="width:50px;">
                <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="email" name="email" id="input-4" required autofocus />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">E-mail</span>
                        </span>
                    </label>                        
                </span>
                    <span class="input input--hoshi">
                    <input class="input__field input__field--hoshi" type="password" name="senha" id="input-4" required />
                    <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                        <span class="input__label-content input__label-content--hoshi">
                            <span id="place">Senha</span>
                        </span>                        
                    </label>                        
                </span>
                <?php
                        
                        
                        $senha = $_SESSION['login'];
                        if($senha > 0){
                            echo('<h3>Senha Incorreta</h3>');
                        }else{
                            
                        }
                        
                        ?>
                    <input type="submit" value="Logar" name="logar" id="Logar">    
                
            </form> 
            <a id="registrar" href="opc_registro.php">
                <input type="submit" value="Registrar" id="Logar" >
            </a>
            
<!--
            <form action="registro.php" id="registro">
                <input type="submit" value="Registrar" name="logar" id="Logar" href="google.com">
            </form>
-->
            
            
        </div>  
    </body>
</html>