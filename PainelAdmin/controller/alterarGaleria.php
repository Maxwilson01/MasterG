<?php
require_once("class/protect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM galeria WHERE idg = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){  
?>
<div class="container">
<form action="?pg=controller/alterarGaleriadb" method="post">
    <input type="hidden" name="id" value="<?=$dados['idg'];?>"> 
        <table>
            <tr>
                <td>Titulo: </td>
                <td><input name="titulo" class="form-control" value="<?=$dados['titulo'];?>" type="text" required="required" required="required" /></td>
            </tr>
            <tr> 
                <td>Autor: </td>
                <td><input name="autor" value="<?=$dados['autor'];?>" class="form-control" type="text" required="required"/></td>
            </tr>
            <tr>
                <td>Imagem Url/Pasta: </td>
                <td><input name="img" class="form-control" value="<?=$dados['img'];?>" required="required" /></td>
            </tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Alterar</button></td>
            </tr>
        </table>
</form>
</div>
<?php 
}
?>