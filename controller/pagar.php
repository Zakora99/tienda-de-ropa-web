<?php
    require_once "../model/carrito.php";
    $model = new Carrito();
    //print_r($_POST);
    $model->setVenta($_POST['total']);
    echo $model->pagar($_POST['user']);
?>