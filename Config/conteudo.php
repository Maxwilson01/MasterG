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
$sql = "SELECT * FROM postagem";
$busca = mysqli_query($conexao, $sql);
echo"
<div class='container'>
  <center><h2>Bem vindo a Master Games</h2></center>
</div>";
while($dados=mysqli_fetch_array($busca)){  
$urlvid = $dados['video'];
$videoMP = "<video width='320' height='240' controls><source src='$urlvid' type='video/mp4'></video>"; 

?>
<div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-3 text-center">
      <div class="service-box">
         <h3><?=$dados['titulo'];?></h3>
         <!--<video width="320" height="240" controls>
            <source src="http://ns.ibxk.com.br/clickjogos/2017/02/24/24222058036002.mp4" type="video/mp4">
            </video>-->
          <img src=<?=$dados['img'];?> class="img-rounded" alt="Cinque Terre" width="304" height="236">

            <p><?=$dados['subtitulo'];?></p><br/>
            <p>Autor: <?=$dados['autor'];?> </p>
            <p class="text-muted"><?=$dados['texto'];?></p>
            <?php 
            if ($dados['video'] == !null) {
              echo $videoMP;  
            }     
            
        ?>
      </div>
  </div>
<?php } ?>
</div>