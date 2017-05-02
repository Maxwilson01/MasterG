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
$sql = "SELECT * FROM galeria";
$busca = mysqli_query($conexao, $sql);   
?>
<center><h2>Bem vindo a Galeria</h2></center>
<?php while($dados=mysqli_fetch_array($busca)){ ?>
<div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-3 text-center">
      <div class="service-box">
         <h3><?=$dados['titulo'];?></h3>
          <a href=<?=$dados['img'];?> target="_blank">
          <img src=<?=$dados['img'];?> class="img-rounded" style="width:100%"></a>
            <p>Autor: <?=$dados['autor'];?> </p> 
            
      </div>
  </div>
<?php } ?> 
</div>
