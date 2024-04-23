<?php
require_once "model/conexion.php";
$model = new Conexion();

$res = $model->getAllPrendas();
?>

<!DOCTYPE html>
<html lang="en">


    <!--es la cabecera de nuestrav pagina web-->
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Aqui se pone el titulo a la pagina web y se pone con el nombre de carrito-->
    <title>Carrito</title> 
    <!-- Se pone los hipervinculos para ingresar a otras paginas-->
    <link rel="shortcut icon" href="resources/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="resources/libs/bootstrap_5/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="resources/css/general.css">
    <link rel="stylesheet" href="resources/css/main.css">
</head>
<!--aqui comienza todo el cuerpo de nuestra pagina web-->
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
<!--aqui nombramos la pagina con el nombre de vaneshop-->
                <a class="navbar-brand" href="index.php">
                    <img src="resources/img/logo.jpg" height="50px" alt="">
                    &nbsp;
                    Vane Shoop
                </a>
                <!--en este apartado agregamosn todos los botones de nuestra pagina para que nos direcciones a los hipervinculos y mandamos a llamra a nuestra clase-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com">
                                <i class="fab fa-facebook-square" aria-hidden="true" style="font-size: 15px; color: blue;"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">55 6447 7055</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="graficas.php" aria-disabled="true">Metricas</a>
                        </li>
                    </ul>
                    <form class="d-flex d-5" style="position: relative;" role="search">
                        <a href="<?php if (!isset($_SESSION['ID'])) {
                                        echo "login.php";
                                    } else {
                                        echo "controller/close.php";
                                    } ?>">
                            <?php if (!isset($_SESSION['ID'])) {
                                echo "Iniciar sesión";
                            } else {
                                echo $_SESSION['nameUser'] . " - Cerrar Sesion";
                            } ?>
                        </a>
                        <a href="carrito.php"><img src="resources/img/cart.png" alt=""></a>
                        <span id="numberCar" class="circle">
                            2
                        </span>
                        &nbsp;
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="banner">
        <img src="resources/img/banner.webp" alt="">
    </div>


    <div id="hero" class="container-fluid p-5">
        <div class="row"> 
            <h2>COMPRA ROPA MODERNA</h2>
            <p>Toda la ropa cuenta con descuento%</p>
            <center>
                <div class="input-group w-50">
                    <input class="form-control" type="text" placeholder="¿Cual es tu estilo Favorito?" id="buscador">
                    <input type="submit" class="btn btn-primary">
                </div>
            </center>
        </div>
        <div class="row mt-4">
            <div class="col-4 mx-auto">
                <i class="fas fa-globe" style="font-size: 50px;"></i>
                <p>Ropa en linea <br>
                    Explora las tendencias más recientes</p>
            </div>
            <div class="col-4 mx-auto">
                <i class="fa fa-certificate" aria-hidden="true" style="font-size: 50px;"></i>
                <p>Prendas Nuevas <br>
                    Aprende de nuevos estilos</p>
            </div>
            <div class="col-4 mx-auto">
                <i class="fas fa-crown" style="font-size: 50px;"></i>
                <p>Acceso de por vida <br>
                    Elige a tu gusto</p>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row">
            <center>
                <h1>Tienda Online de Ropa</h1>
                <hr style="width: 80%;">
            </center>
        </div>
        <div class="row">
            <?php while ($item = $res->fetch_assoc()) { ?>
                <div class="col-6 col-md-4 mx-auto mt-3 mb-3">
                    <div class="card h-100">
                        <div class="img-box-card">
                            <img src="resources/prendas/<?php echo $item['folio_prenda']; ?>.jpg" class="img-card">
                        </div>
  <!--en esta clase insertamos una de las imagenes que se mostrara en la pagina-->                                    
                        <div class="info-card text-center mb-1">
                            <h4> <?php echo $item['nombre_prenda']; ?> </h4>
                            <p> <?php echo $item['diseñador']; ?> </p>
                            <img src="resources/img/estrellas.png">
                            <div class="precio">
                                <span class="price-ant">
                                    $ <?php echo $item['price_ant']; ?>
                                </span>
                                <span class="price">
                                    $ <?php echo $item['price']; ?>
                                </span>
                            </div>
                            <button class="btn btn-primary" onclick="newCar(<?php echo $item['folio_prenda']; ?>, <?php if (!isset($_SESSION['ID'])) echo '0';
                                                                                                                    else echo $_SESSION['ID']; ?>)">Agregar Al Carrito</button>
                        </div>
                    </div> <!--.card-->
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Este es el apartado de nuestro footer que contiene todon lo que son listas como de aviso de privacidad-->

    <div class="container-fluid">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <p class="text-muted">© 2024</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="resources/libs/jquery.js"></script>
    <script src="resources/libs/sweetalert.js"></script>
    <script src="resources/libs/bootstrap_5/js/bootstrap.min.js"></script>
    <script src="resources/libs/fontawesome/js/all.min.js"></script>
    <script>
        var us = "<?php if (!isset($_SESSION['ID'])) echo "0";
                    else echo $_SESSION['ID']; ?>"
    </script>
    <script src="resources/js/app.js"></script>

</body>

</html>