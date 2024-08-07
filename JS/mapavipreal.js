function iniciarMapa() {
  var coord = { lat: -17.40879316486098, lng: -66.0198730067296 };
  var coord1 = { lat: -17.404953859702623, lng: -66.01575345664415 };

  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 16,
    center: coord1,
  });

  var marker1 = new google.maps.Marker({
    position: coord,
    title: "PRETENSADOS VIPREAL",
    draggable: true,
    map: map,
  });

  var infoWindow1 = new google.maps.InfoWindow({
    content: `
      <div style="text-align:center; font-family: 'Poppins', sans-serif;">
        <h3 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 8px;">PRETENSADOS VIPREAL</h3>
        <p style="color: #666; font-size: 16px; margin-bottom: 12px;">Centro de fabricacion de viguetas</p>
        <img src="img/Ubicacion1.jpeg" alt="Ubicación 1" style="width: 150px; height: auto; border-radius: 8px;">
      </div>`,
  });

  marker1.addListener("click", function () {
    infoWindow1.open(map, marker1);
  });

  var marker2 = new google.maps.Marker({
    position: coord1,
    title: "Otro Punto de Ubicación",
    draggable: true,
    map: map,
  });

  var infoWindow2 = new google.maps.InfoWindow({
    content: `
      <div style="text-align:center; font-family: 'Poppins', sans-serif;">
        <h3 style="color: #333; font-size: 24px; font-weight: bold; margin-bottom: 8px;">Sucursal de venta</h3>
        <p style="color: #666; font-size: 16px; margin-bottom: 12px;">Lugar de Alquiler</p>
        <img src="img/ubicacion2.jpeg" alt="Ubicación 2" style="width: 150px; height: auto; border-radius: 8px;">
      </div>`,
  });

  marker2.addListener("click", function () {
    infoWindow2.open(map, marker2);
  });
}
