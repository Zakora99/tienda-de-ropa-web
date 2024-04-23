<?php
session_start();

class Conexion{
    public function conexion(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $shema = "vaneshop";

        $conexion = mysqli_connect($host, $user, $pass, $shema);

        if(!$conexion){
            return false;
        }

        return $conexion;
    }

    public function getAllPrendas(){
        $con = self::conexion();
        if($con != false){
            $query = $con->prepare("SELECT * FROM prendas");
            $query->execute();
            $res = $query->get_result();

            $query->close();
            return $res;
        }
    }

    public function login($user, $pass){
        $con = self::conexion();
        if($con != false){
            $query = $con->prepare("SELECT id_user, nombre FROM usuario WHERE mail = ? and pass = ?");
            $query->bind_param('ss',$user,$pass);
            $query->execute();
            $res = $query->get_result();

            $query->close();

            if($res->num_rows > 0){
                $item = $res->fetch_assoc();
                $_SESSION['ID'] = $item['id_user'];
                $_SESSION['nameUser'] = $item['nombre'];
                header('Location: ../index.php');
            }

            return $res;
        }
    }
}

?>