<?php

//session_start();
require_once("config.php");

session_unset($_SESSION['nome']);

echo "Nome da sessão ativa: " . $_SESSION['nome'] . ", startada no exemplo-01.php";

session_destroy();

?>