<?php     include '../admin/conexao.php'; 

mysqli_set_charset($conexao,'utf8'); 

$nome           = $_POST['titulo'];
$descricao      = $_POST['descricao'];
$link           = $_POST['link'];
$data           = $_POST['data'];
$nm_imagem        = str_replace(" ","",$nome);


if(isset($_FILES['imagem'])){
    $extensao = strtolower( substr($_FILES['imagem']['name'], -4));
    if($extensao == '.jpg'){
        
    }else{
        $extensao = '.jpg';
    }
    $imagem = $nm_imagem . date("Y.m.d-H.i.s") . $extensao;
    $diretorio = ("../IMG/pesquisa/thumb/");
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$imagem);
    
    
}

$sql            =mysqli_query($conexao, "INSERT INTO pesquisas(titulo, descricao, imagem, link, data) VALUES ('$nome', '$descricao', '$imagem', '$link', '$data')");
        echo '<script> alert("Registrado!")</script>';
        echo '<script> window.setTimeout(window.location.href = "pesquisa.php",5000)</script>';
?>