<?php
session_start();
// as vari�veis login e senha recebem os dados digitados na p�gina anterior
$login = $_POST['login'];
$senha = $_POST['senha'];

unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('location:inicial.php');


?>