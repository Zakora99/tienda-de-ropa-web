<?php
    require_once "../model/carrito.php";
    $model = new Carrito();

    //print_r($_POST);
    echo $model->deleteProd($_POST['id']);

?>