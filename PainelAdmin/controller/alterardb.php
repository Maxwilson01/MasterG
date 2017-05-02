<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$img = $_POST['img'];
$texto =  $_POST['texto'];
$autor = $_POST['autor'];
$video = $_POST['video'];

$sql2 = mysqli_query($conexao, "SELECT * FROM postagem WHERE id='$id'");

$sql = "UPDATE postagem SET titulo='$titulo', subtitulo='$subtitulo',img='$img',  texto='$texto', autor='$autor', video='$video' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=controller/listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=controller/listar'>Voltar</a>";
}
?>