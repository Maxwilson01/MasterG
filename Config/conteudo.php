<?php
include_once("Model/config.inc.php");
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