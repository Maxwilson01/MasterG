<?php 
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php"); ?>
<script language='javascript'>

function confirmaExclusao(aURL) {

if(confirm('Você tem certeza que deseja excluir?')) {

location.href = aURL;

}

}

</script>
<?php

$busca = "Select * from postagem order by id";

$todos = mysqli_query($conexao, $busca);?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <table>
            <tr>
                <td style="width: 60px;">ID:</td>
                <td style="width: 205px;">Titulo:</td>
                <td style="width: 105px;">Subtitulo:</td>
                <td style="width: 105px;">Imagem URL:</td>
                <td style="width: 105px;">Autor:</td>
                <td style="width: 105px;">Alterar</td>
                <td style="width: 105px;">Excluir</td>
             </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <div>
        <tr>
            <td><?=$dados['id'];?></td>
            <td><?=$dados['titulo'];?></td>
            <td><?=$dados['subtitulo'];?></td>
            <td><?=$dados['img'];?></td>
            <td><?=$dados['autor'];?></td>
            <td><a href="?pg=controller/alterar&id=<?=$dados['id']; ?>" class="btn btn-default" role="button">Alterar</a></td>
            
            <td><a href="javascript:confirmaExclusao('?pg=controller/excluirdb&id=<?=$dados['id']; ?>')" class="btn btn-warning" role="button">Excluir</a></td>
            
        </tr>
    </div>  
             <?php } ?>
        </table>
    </div>
    </div>
</div>
