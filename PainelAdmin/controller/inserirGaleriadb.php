<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$img = $_POST['img'];

$sql = "INSERT INTO galeria (titulo, autor, img) VALUES 
('$titulo', '$autor', '$img')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> <a href='?pg=controller/inserirGaleria'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:?pg=controller/inserirGaleria");
}
?>