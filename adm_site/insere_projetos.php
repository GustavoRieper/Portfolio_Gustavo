<?php     include '../admin/conexao.php'; 

$nome           = $_POST['nome'];
$descricao      = $_POST['descricao'];
$imagem         = $_POST['imagem'];
$link           = $_POST['link'];
$data           = $_POST['data'];

$sql            =mysqli_query($conexao, "INSERT INTO projetos(nome, descricao, imagem, link, data) VALUES ('$nome', '$descricao', '$imagem', '$link', '$data')");
        echo '<script> alert("Registrado!")</script>';
        echo '<script> window.setTimeout(window.location.href = "projetos.php",5000)</script>';
    ?>


?>