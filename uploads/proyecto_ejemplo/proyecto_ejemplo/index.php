<?php
require_once 'Usuario.php';
require_once 'Sistema.php';

$usuario = new Usuario();
$usuario->login();

$sistema = new Sistema();
$sistema->analizarCodigo("main.php");
$sistema->generarDiagrama();
