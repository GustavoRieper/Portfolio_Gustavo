<?php
    date_default_timezone_set('Brazil/East');
    header ('Content-type: text/html; charset=UTF-8');

    include("conexao.php");
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];
    $date = date('d/m/Y');

    $sql = "INSERT INTO contato VALUES ('$nome', '$email', '$msg','$date')";
    $insert = mysqli_query($conection,$sql);

    $exibir = "
        Nome: $nome
    	Email: $email
    	Mensagem: $msg
    	Data: $date
    ";

    echo("<script>alert('Mensagem enviado com sucesso!');</script>");
    echo "<script> window.location='../contato.php';</script>"; 

	ini_set('display_errors', 1);
	 
	error_reporting(E_ALL);
	 
	$from = "gustavorieper@gmail.com";
	 
	$to = "gustavorieper@gmail.com";
	 
	$subject = "Contato do Portfólio";
	 
	$message = $exibir;
	 
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
	 
	mail($to, $subject, $message, $headers);
?>
