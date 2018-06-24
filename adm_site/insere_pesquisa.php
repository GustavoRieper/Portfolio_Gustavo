<?php     include '../admin/conexao.php'; 

mysqli_set_charset($conexao,'utf8'); 

$nome           = $_POST['titulo'];
$descricao      = $_POST['descricao'];
$imagem         = $_POST['imagem'];
$link           = $_POST['link'];
$data           = $_POST['data'];

$sql            =mysqli_query($conexao, "INSERT INTO pesquisas(titulo, descricao, imagem, link, data) VALUES ('$nome', '$descricao', '$imagem', '$link', '$data')");
        echo '<script> alert("Registrado!")</script>';
        echo '<script> window.setTimeout(window.location.href = "pesquisa.php",5000)</script>';
    ?>


?>