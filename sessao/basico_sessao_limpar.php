<?php 

session_start();
session_destroy();//limpa sessao
header('Location: basico_sessao.php');//acessar a pagina basico_sessao.php

?>