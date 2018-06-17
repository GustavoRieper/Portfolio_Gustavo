<?php
    include '../admin/conexao.php';
    session_start();
    $email = $_SESSION['email']; 

    $dados= mysqli_query($conexao, "SELECT nome, sobrenome FROM usuario WHERE '$email'= email") or die (mysql_error());
    $nome = mysqli_fetch_assoc($dados);
    if($email == NULL){
        
        header("location: ../admin.php");
        echo "<script>alert('Email não encontrado')</script>";
    }else{
        
    }

    mysqli_set_charset($conexao,'utf8'); 
    $sql = "SELECT * FROM usuario"; 
    $resultado = mysqli_query($conexao,$sql);
    $numero_linhas = mysqli_num_rows($resultado);
    while ($linha = mysqli_fetch_array($resultado)){
        $nome       = $linha["nome"];
        $sobrenome  = $linha["sobrenome"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    
    <body>
        <a href="logout.php">
            <h2>Sair</h2>
        </a>
    </body>

</html>