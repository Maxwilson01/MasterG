<?php
session_start();
unset($_SESSION[user_logado]);
session_destroy();
?>
<script>location.href='/MasterG/PainelAdmin/login.php';</script> 
<?php exit('Redirecionando...'); ?>