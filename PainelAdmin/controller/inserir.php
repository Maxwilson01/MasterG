<?php require_once("class/protect.php"); ?>
<div class="row">
    <div class="container">
        <form action="?pg=controller/inserirdb" method="post">
        <table>
            <tr>
                <td>Titulo: </td>
                <td><input name="titulo" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>SubTitulo: </td>
                <td><input name="subtitulo" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Imagem Pasta/Url: </td>
                <td><input name="img" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Video Pasta/Url: </td>
                <td><input name="video" class="form-control" type="text"/></td>
            </tr>
            <tr> 
                <td>Autor: </td>
                <td><input name="autor" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Mensagem: </td>
                <td><textarea name="texto" class="form-control" id="texto" rows="10" cols="100"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Cadastrar</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>