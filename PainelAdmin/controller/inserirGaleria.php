<?php 
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php"); ?>
<div class="row">
    <div class="container">
        <form action="?pg=controller/inserirGaleriadb" method="post">
        <table>
            <tr>
                <td>Titulo: </td>
                <td><input name="titulo" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr>
                <td>Autor: </td>
                <td><input name="autor" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>Imagem Pasta/Url: </td>
                <td><input name="img" class="form-control" type="text" required="required"/></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Cadastrar</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>