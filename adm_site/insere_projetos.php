<?php     include '../admin/conexao.php'; 

mysqli_set_charset($conexao,'utf8'); 
$nome           = $_POST['nome'];
$descricao      = $_POST['descricao'];
$imagem         = $_POST['imagem'];
$link           = $_POST['link'];
$data           = $_POST['data'];

$sql            =mysqli_query($conexao, "INSERT INTO projetos(nome, descricao, imagem, link, data) VALUES ('$nome', '$descricao', '$imagem', '$link', '$data') utf8");
        echo '<script> alert("Registrado!")</script>';
        echo '<script> window.setTimeout(window.location.href = "projetos.php",5000)</script>';
    ?>


?>