<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$img = $_POST['img'];
$texto = $_POST['texto'];
$autor = $_POST['autor'];
$video = $_POST['video'];

$sql = "INSERT INTO postagem (titulo, subtitulo, img, texto, autor, video) VALUES 
('$titulo', '$subtitulo', '$img','$texto','$autor','$video')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> <a href='?pg=controller/inserir'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:?pg=controller/inserir");
}
?>