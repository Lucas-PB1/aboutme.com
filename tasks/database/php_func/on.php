<script src="/tasks/javascript/functions.js"></script>

<?php

include "tasks/database/data.php";

//error_reporting(0);
//ini_set("display_errors",0);

function log_on()
{
    if (isset($_GET['key'])) {
        return $_GET['key'];
    } else {
        return "";
    }
}
function usuario()
{
    if (isset($_GET['key'])) {
        if (strlen($_GET['key']) > 0) {
            $user = search_user($_GET['key']);
            foreach ($user as $key) {
                echo "<div>
            <spam id='username'>" . $key["nome"] . "</spam>
            <img id='thumbnail' src='/images/backs/21.png'>
            <a id='sair' href='?pg=home'>Sair</a>
        </div>";
            }
        } else {
            echo "<a href='?pg=parts/login_pages/login'>Login</a>
                <a href='?pg=parts/login_pages/register'>Registro</a>";
        }
    } else {
        echo "<a href='?pg=parts/login_pages/login'>Login</a>
            <a href='?pg=parts/login_pages/register'>Registro</a>";
    }
}
