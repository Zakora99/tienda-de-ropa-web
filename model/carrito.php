<?php

require_once "conexion.php";

class Carrito extends Conexion
{

    public function newCar($user, $producto, $cantidad)
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("INSERT INTO carrito(fk_user, fk_producto, cantida) VALUES (?,?,?)");
            $query->bind_param('sss', $user, $producto, $cantidad);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }

    public function getNumero($id)
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("SELECT COUNT(id_carrito) as Numero FROM carrito WHERE fk_user = ?");
            $query->bind_param('s', $id);
            $query->execute();

            $aux = $query->get_result()->fetch_assoc();
            $res = $aux['Numero'];
            $query->close();
        }
        return $res;
    }

    public function getCar($id)
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("SELECT c.id_carrito, c.fk_producto, p.nombre_prenda, p.price, c.cantida from carrito AS c INNER JOIN prendas AS p ON p.folio_prenda = c.fk_producto WHERE c.fk_user = ?");
            $query->bind_param('s', $id);
            $query->execute();

            $res = $query->get_result();

            $query->close();
        }
        return $res;
    }


    public function deleteProd($item)
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("DELETE FROM carrito WHERE id_carrito = ?");
            $query->bind_param('s', $item);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }

    public function pagar($item)
    {
        $con = Conexion::conexion();
        $car = self::getCar($item);
        $res = -1;
        $venta = 0;
        if ($car->num_rows > 0) {
            $venta = self::getLastVenta();
            while ($aux = $car->fetch_assoc()) {
                $query = $con->prepare("INSERT INTO detalle_venta(fk_tiket, fk_prenda, cant, importe) VALUES(?,?,?,?)");
                $query->bind_param('ssss', $venta, $aux['fk_producto'], $aux['cantida'], $aux['price']);
                $res = $query->execute();
            }
            //self::sendTiket($item);
            //self::cleanCar($item);

            $query->close();
        }
        return $res;
    }

    public function setVenta($total)
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("INSERT INTO ventas (total) VALUES (?)");
            $query->bind_param('s', $total);
            $res = $query->execute();

            $query->close();
        }
        return $res;
    }

    public function getLastVenta()
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("SELECT folio_venta FROM ventas ORDER BY folio_venta DESC LIMIT 1");
            $query->execute();
            $res = $query->get_result()->fetch_assoc();
            $res = $res['folio_venta'];
            $query->close();
        }
        return $res;
    }

    public function getLastVentaP()
    {
        $con = Conexion::conexion();
        $res = -1;
        if ($con != false) {
            $query = $con->prepare("SELECT total FROM ventas ORDER BY folio_venta DESC LIMIT 1");
            $query->execute();
            $res = $query->get_result()->fetch_assoc();
            $res = $res['total'];
            $query->close();
        }
        return $res;
    }

    public function cleanCar($id)
    {
        $car = self::getCar($id);
        $res = -1;
        
        if ($car->num_rows > 0) {
            while ($aux = $car->fetch_assoc()) {
                self::deleteProd($aux['id_carrito']);
            }
        }
        return $res;
    }

    public function sendTiket($id){
        $car = self::getCar($id);
        $res = -1;
        $to = "lumegamx1516@gmail.com";
        $message = "Hola este es tu tiket digital: \n";
        $title = "Tiket de Compra";
        if ($car->num_rows > 0) {
            while ($aux = $car->fetch_assoc()) {
                $message .= $aux['nombre_prenda']."\t";
                $message .= $aux['cantida'] ."\t";
                $message .= $aux['price']."\n";
                
                //self::deleteProd($aux['id_carrito']);
            }
            mail($to,$title,$message);
        }

        //echo $message;
        return $res;
    }

    public function getFrecuencias()
    {
        $con = self::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT p.nombre_prenda, count(dv.fk_prenda) as numero FROM detalle_venta AS dv INNER JOIN prendas AS p ON p.folio_prenda = dv.fk_prenda GROUP BY dv.fk_prenda");
            $query->execute();
            $aux = $query->get_result();

            $query->close();

            if ($aux->num_rows > 0) {
                while($item = $aux->fetch_assoc()){
                    $json[] =array(
                        "label" => $item['nombre_prenda'],
                        "cantidad" => $item['numero']
                    );
                }
                return json_encode($json);
            }
            else{
                return -2;
            }
        }
        return 1;
    }

    public function getStoker()
    {
        $con = self::conexion();
        if ($con != false) {
            $query = $con->prepare("SELECT p.nombre_prenda, p.cantidad FROM prendas AS p");
            $query->execute();
            $aux = $query->get_result();

            $query->close();

            if ($aux->num_rows > 0) {
                while($item = $aux->fetch_assoc()){
                    $json[] =array(
                        "label" => $item['nombre_prenda'],
                        "cantidad" => $item['cantidad']
                    );
                }
                return json_encode($json);
            }
            else{
                return -2;
            }
        }
        return 1;
    }
}
