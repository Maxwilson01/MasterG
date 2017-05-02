<?php
require_once("class/protect.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
//$nivel = $_POST['nivel'];
$senha = $_POST['senha'];
$sql2 = mysqli_query($conexao, "SELECT * FROM users WHERE iduser='$id'");

$sql = "UPDATE users SET nome='$nome', email='$email',senha='$senha' WHERE iduser=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=controller/listarAdmin'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=controller/listarAdmin'>Voltar</a>";
}
?>