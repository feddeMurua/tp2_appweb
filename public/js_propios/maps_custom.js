//Posición Inicial : Rawson
var mymap = new GMaps({
    el: '#mymap',
    lat: -43.299400,
    lng: -65.106112,
    zoom:14
    });


    mymap.addMarker({
        lat: -43.299400,
        lng: -65.106112,
        title: 'Rawson',
        click: function(e) {
            alert('Accidente Ocurrido...');
        },
        icon:{
            url: "images/senial_accidente.jpg",
            scaledSize: new google.maps.Size(34, 34)
        } //Ejemplo para cambiar ícono
    });