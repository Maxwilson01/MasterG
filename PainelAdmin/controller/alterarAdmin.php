<?php
require_once("class/protect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE iduser = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){  
?>
<div class="container">
<form action="?pg=controller/alterarAdmindb" method="post">
    <input type="hidden" name="id" value="<?=$dados['iduser'];?>"> 
        <table>
            <tr>
                <td>Nome: </td>
                <td><input name="nome" class="form-control" value="<?=$dados['nome'];?>" type="text" required="required" required="required" /></td>
            </tr>
            <tr> 
                <td>E-Mail: </td>
                <td><input name="email" value="<?=$dados['email'];?>" class="form-control" type="text" required="required"/></td>
            </tr>
            <tr>
                <td>Senha: </td>
                <td><input name="senha" class="form-control" type="password" required="required" /></td>
            </tr>
            <tr> 
                <td>Nivel: </td>
                <td><input name="nivel" value="<?=$dados['nivel'];?>" class="form-control" type="text" disabled/></td>
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