<?php
require_once "../model/carrito.php";
$model = new Carrito();

//print_r($_POST);

echo $model->newCar($_POST['user'], $_POST['id'], '1');
