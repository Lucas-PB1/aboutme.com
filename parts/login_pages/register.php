<?php
if (isset($_REQUEST['submit'])) registro(
    $_REQUEST['name'],
    $_REQUEST['sobrenome'],
    $_REQUEST['email'],
    $_REQUEST['senha'],
    $_REQUEST['repeat']
);
?>
<div id="registro" class="content">
    <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
        <h2>Faça seu registro!</h2>
        <spam id="err_reg" style="display: none;"></spam>
        <input type="text" placeholder="Nome" name="name">
        <input type="text" placeholder="Sobrenome" name="sobrenome">
        <input type="text" placeholder="seuemail@gmail.com" name="email">
        <input type="password" placeholder="Senha" name="senha">
        <input type="password" placeholder="Repita sua senha" name="repeat">
        <div>
            <button name="submit" class="btn btn-success">Enviar</button>
            <a href="?pg=parts\login_pages\login" class="btn btn-success">Login</a>
        </div>
    </form>
</div>