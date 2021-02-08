<?php
if (isset($_REQUEST['submit'])) login($_REQUEST['data'],$_REQUEST['senha']);
?>
<div id="login" class="content">
    <form action="#" method="POST">
        <h2>Login!</h2>
        <input placeholder="Nome ou E-mail" type="text" name="data" required>
        <input placeholder="Senha" type="password" name="senha" required>
        <div>
            <button name="submit" class="btn btn-success">Enviar</button>
            <a href="?pg=parts/login_pages/register" class="btn btn-success">Registro</a>
        </div>
    </form>
</div>