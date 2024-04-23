function deteleteCar(id) {
  swal({
    title: "Desea eliminar este producto del carrito?",
    text: "Vanesa Hernandez Niño",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: "controller/deleteCar.php",
          type: 'POST',
          data: { id },
          success: function (response) {
            if (response == '1') {
              location.reload();
            }
          }
        });
      }
    });
}

function pagar(user, total) {
  $.ajax({
    url: 'controller/pagar.php',
    type: 'POST',
    data: { user, total },
    success: function (response) {
      console.log(response);
      if (response == 1) {
        swal("Compra realizada con exito!", "Vanessa Hernandez Niño", "success").then((value) => {
          location.reload();
        });
      }
    },
    complete: function () {
      window.open("tiket.php");
    }
  });
  getCarrito();
}

function getCarrito() {
  $.ajax({
    url: 'controller/getNumberCar.php',
    type: 'POST',
    data: { us },
    success: function (respone) {
      $('#numberCar').html(respone);
    }
  });
}

$(function () {
  getCarrito();
})