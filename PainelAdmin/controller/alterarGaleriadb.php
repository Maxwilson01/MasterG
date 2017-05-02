<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$img = $_POST['img'];

$sql2 = mysqli_query($conexao, "SELECT * FROM galeria WHERE idg='$id'");

$sql = "UPDATE galeria SET titulo='$titulo', autor='$autor',img='$img' WHERE idg=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=controller/listarGaleria'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=controller/listarGaleria'>Voltar</a>";
}
?>