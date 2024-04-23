<?php 
require_once "../model/conexion.php";
$model = new Conexion();

print_r($_POST);
$model->login($_POST['user'], $_POST['pass']);
