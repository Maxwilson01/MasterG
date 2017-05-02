<?php  
$host = "localhost";
$bd = "masterg";
$user = "root";
$pass = "";

$conexao = mysqli_connect($host,$user,$pass);

$banco = mysqli_select_db($conexao, $bd);

if(!$conexao){
    echo "Conexão com banco de dados Falhou";
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['telefone'];

$sql = "INSERT INTO  contatos(nome, email, telefone, assunto, mensagem) VALUES 
('$nome', '$email', '$telefone', '$assunto','$mensagem')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar o formulario.</h4>";
    header("location:/MasterG");
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:/MasterG");
}



?>
