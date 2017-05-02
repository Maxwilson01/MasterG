<?php
require_once("class/protect.php");
header("content-type: text/html; charset=utf-8");
$id = $_GET['id'];
$sql = "SELECT * FROM postagem WHERE id = $id";

$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){  
?>
<div class="container">
<form action="?pg=controller/alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
        <table>
            <tr>
                <td>Titulo: </td>
                <td><input name="titulo" class="form-control" value="<?=$dados['titulo'];?>" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>SubTitulo: </td>
                <td><input name="subtitulo" value="<?=$dados['subtitulo'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Imagem link/url: </td>
                <td><input name="img" value="<?=$dados['img'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Video Pasta/Url: </td>
                <td><input name="video" value="<?=$dados['video'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr> 
                <td>Autor: </td>
                <td><input name="autor" value="<?=$dados['autor'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Mensagem: </td>
                <td><textarea name="texto" value="<?=$dados['texto'];?>" class="form-control" id="texto" rows="10" cols="100"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Alterar</button></td>
            </tr>
        </table>
</form>
</div>
<?php 
}
?>