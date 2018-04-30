<!doctype html>
<html lang="{{ app()->getLocale() }}">
        <head>
            <title>Google map integration in php example</title>
            <script src="http://maps.google.com/maps/api/js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
            <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
            
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
                zoom:14
                });
            
            
                mymap.addMarker({
                lat: -43.299400,
                lng: -65.106112,
                title: 'Rawson',
                click: function(e) {
                    alert('This is Rawson, Chubut from Argentina.');
                }
                });
                        
            </script>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{ asset('js/bootstrap.js') }}"></script>
        </body>
</html>
