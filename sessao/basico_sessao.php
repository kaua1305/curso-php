<div class="titulo">Sessão</div>

<?php

session_start();

print_r($_SESSION);

if(!$_SESSION['nome']){
    $_SESSION['nome'] = "Guilherme";
}

if(!$_SESSION['email']){
    $_SESSION['email'] = "guilherme@hotmail.com";
}

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">
        Alterar Sessão
    </a>
</p>