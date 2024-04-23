function newCar(id, user){
    if(user == '0'){
        swal("Inicia sesioón para poder agregar productos al carrito!","Vanessa Hernandez Niño","info");
        return 0;
    }
    $.ajax({
        url:'controller/newCar.php',
        type:'POST',
        data: {id, user},
        success: function(response){

            if(response.trim() == 1){
                swal("Producto Agregado al Carrito!","Vanessa Hernandez","success");
                getCarrito();
            }
            else{
                swal("Oops! ocurrio un error, intenta mas tarde","Lo siento","info");
            }
        }
    });
}

function getCarrito(){
    $.ajax({
        url:'controller/getNumberCar.php',
        type:'POST',
        data:{us},
        success: function(respone){
            $('#numberCar').html(respone);
        }
    });
}

$(function(){
    console.log("jQuery is Work");
    getCarrito();
})