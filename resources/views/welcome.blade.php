<!doctype html>
<html lang="{{ app()->getLocale() }}">
        <head>
                <title>Google map integration in php example</title>
                <script src="http://maps.google.com/maps/api/js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
              
              
                <style type="text/css">
                  #mymap {
                    border:1px solid red;
                    width: 800px;
                    height: 500px;
                  }
                </style>
              
              
              </head>
              <body>
              
                
                <h1>Google map integration in php example</h1>
                <div id="mymap"></div>
              
              
                <script type="text/javascript">

                  var mymap = new GMaps({
                    el: '#mymap',
                    lat: -43.299400,
                    lng: -65.106112,
                    zoom:6
                  });
              
              
                  mymap.addMarker({
                    lat: -43.299400,
                    lng: -65.106112,
                    title: 'Surat',
                    click: function(e) {
                      alert('This is Rawson, Chubut from Argentina.');
                    }
                  });
              
              
                </script>
              
              
              </body>
</html>
