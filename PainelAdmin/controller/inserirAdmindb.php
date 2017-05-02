<?php
require_once("class/protect.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$sql = "INSERT INTO users (email, senha, nivel, nome) VALUES 
('$email', md5('$senha'), '$nivel','$nome')";

$insert = mysqli_query($conexao, $sql);
if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> <a href='?pg=controller/inserir'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
}
?>