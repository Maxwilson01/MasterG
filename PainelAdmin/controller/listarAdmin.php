<?php require_once("class/protect.php"); ?>
<script language='javascript'>

function confirmaExclusao(aURL) {

if(confirm('Você tem certeza que deseja excluir?')) {

location.href = aURL;

}

}

</script>
<?php

$busca = "Select * from users order by iduser";

$todos = mysqli_query($conexao, $busca);?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <table>
            <tr>
                <td style="width: 60px;">ID:</td>
                <td style="width: 205px;">Nome:</td>
                <td style="width: 305px;">E-mail:</td>
                <td style="width: 105px;">Nivel:</td>
                <td style="width: 105px;">Alterar</td>
                <td style="width: 105px;">Excluir</td>
             </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <div>
        <tr>
            <td><?=$dados['iduser'];?></td>
            <td><?=$dados['nome'];?></td>
            <td><?=$dados['email'];?> </td>
            <td><?=$dados['nivel'];?></td>
            <td><a href="?pg=controller/alterarAdmin&id=<?=$dados['iduser']; ?>" class="btn btn-default" role="button">Alterar</a></td>
            
            <td><a href="javascript:confirmaExclusao('?pg=controller/excluirAdmindb&id=<?=$dados['iduser']; ?>')" class="btn btn-warning" role="button">Excluir</a></td>
            
        </tr>
    </div>  
             <?php } ?>
        </table>
    </div>
    </div>
</div>
