<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css_propios/nav.css') }}" rel="stylesheet">            
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/gmaps.js') }}"></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">        
        
        <style type="text/css">
        
            *{
                margin: 0px;
                padding: 0px;
            }
            
            html { height: 100% }
            body{ height: 100%; margin: 0px; padding: 0px;}
            #map_canvas { height: 600px; width: 100%; border:1px solid red; }
            #shelf{position:fixed; top:10px; left:500px; height:100px;width:200px;background:white;opacity:0.7;}
            .draggable {position:absolute;top:10px, left:10px; width: 30px; height: 30px;z-index:1000000000;}
                    
        </style>
        
        <script type="text/javascript">
          
          $(document).ready(function() {
                
                $("#accidente").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_accidente(ll);                        
                        }
                    });

                $("#robo").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_robo(ll);                        
                        }
                    });

                $("#animales").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_animales(ll);                        
                        }
                    });

                $("#semaforos").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_semaforos(ll);                        
                        }
                    });

                $("#perdida_agua").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_perdida_agua(ll);                        
                        }
                    });

                $("#bache").draggable(
                    {helper: 'clone',
                    stop: function(e) {
                        var point=new google.maps.Point(e.pageX,e.pageY);
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_bache(ll);   
                        $('#myModal').modal('toggle');
                        $('#myModal').modal('show');                        
                        }
                    });
            });
        </script>
       
       <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBxbgjqmVf-vyeDxCYdqL-RbgUAfHAILBo&amp;"></script>
        <script type="text/javascript">
           
           var $map;
            var $latlng;
            var overlay;
           
            function initialize() {
                var $latlng = new google.maps.LatLng(-43.299400, -65.106112);

                var myOptions = {
                    zoom:15,
                    center: $latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        position: google.maps.ControlPosition.TOP_LEFT },
                        zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.LEFT_TOP
                    },
                    scaleControl: true,
                    scaleControlOptions: {
                        position: google.maps.ControlPosition.TOP_LEFT
                    },
                    streetViewControl: false,
                    panControl:false,
                };

                $map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);

                overlay = new google.maps.OverlayView();
                overlay.draw = function() {};
                overlay.setMap($map);
                /*
                //si es necesario evento cuando se mueve el mapa
                google.maps.event.addListener($map, 'dragend', function() { alert('map dragged'); } );
                */

            } 
        
            function placeMarker_accidente(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/senial_accidente.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });             
                /*
                //si es necesario evento cuando se mueve el marcador                                
                google.maps.event.addListener(marker, "dragend", function(event) { 
                var lat = event.latLng.lat(); 
                var lng = event.latLng.lng(); 
                console.log(lat);
                }); 
                */
                
                /*
                //actualiza coordenadas
                google.maps.event.addListener(marker, "drag", function(event) { 
                var lat = event.latLng.lat(); 
                var lng = event.latLng.lng(); 
                console.log(lat);
                }); 
                */
            
            }

            function placeMarker_robo(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/senial_robo.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });             
            }

            function placeMarker_animales(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/senial_animales.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });             
            }

            function placeMarker_semaforos(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/semaforo.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });             
            }
            
            function placeMarker_perdida_agua(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/perdida_agua.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });    
            }
            
            function placeMarker_bache(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/bache.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                    
                }); 
                
            }

        </script>
    </head>

    <body onload="initialize()">
        
        <!--        
        <div id="map_canvas"></div>
        <div id='shelf'>Drag the image<br/>
            <img data-toggle="tooltip" title="Accidentes de Tránsito" id="accidente" class="draggable" src='images/senial_accidente.jpg'/>
            <br><br>
            <img data-toggle="tooltip" title="Baches" id="bache" class="draggable" src='images/bache.jpg'/>
        </div>        
        -->
        
        <div class="row">            
            <div class="col-sm-10">
                <div id="map_canvas"></div>
            </div>            
            <div class="col-sm-2">
                <h1 align="center">Eventos</h1><br>
                <div align="center">                            
                    <img data-toggle="tooltip" title="Accidentes de Tránsito" id="accidente_2" src="{{ asset('images/senial_accidente.jpg') }}" alt="Smiley face" width="50" height="50">
                    <br><br>
                    <img data-toggle="tooltip" title="Robos" id="robo_2" src="{{ asset('images/senial_robo.jpg') }}" alt="Smiley face" width="50" height="50">
                    <br><br>                            
                    <img data-toggle="tooltip" title="Animales Sueltos" id="animales_2" src="{{ asset('images/senial_animales.jpg') }}" alt="Smiley face" width="50" height="50">
                </div>
                <hr>
                <h1 align="center">Objetos</h1><br>
                <div align="center">                            
                    <img data-toggle="tooltip" title="Semáforos" id="semaforo_2" src="{{ asset('images/semaforo.jpg') }}" alt="Smiley face" width="50" height="50">
                    <br><br>
                    <img data-toggle="tooltip" title="Pérdida de Agua" id="perdida_agua_2" src="{{ asset('images/perdida_agua.jpg') }}" alt="Smiley face" width="50" height="50">
                    <br><br>
                    <img data-toggle="tooltip" title="Baches" id="bache_2" src="{{ asset('images/bache.jpg') }}" alt="Smiley face" width="50" height="50">    
                </div>                        
                <!--glyphicon glyphicon-list-->
            </div>
        </div>        

        <div class="row">
            <div id='shelf'>Arrastrar el Aspecto deseado<br/>
                <img draggable="True" data-toggle="tooltip" title="Accidentes de Tránsito" id="accidente" class="draggable" src='images/senial_accidente.jpg'/>
                <img  style="left:25%;" data-toggle="tooltip" title="Robos" id="robo" class="draggable" src='images/senial_robo.jpg'/>
                <img  style="left:50%;" data-toggle="tooltip" title="Animales Sueltos" id="animales" class="draggable" src='images/senial_animales.jpg'/>
                <br><br>
                <img data-toggle="tooltip" title="Semáforos" id="semaforos" class="draggable" src='images/semaforo.jpg'/>
                <img  style="left:25%;" data-toggle="tooltip" title="Pérdida de Agua" id="perdida_agua" class="draggable" src='images/perdida_agua.jpg'/>
                <img  style="left:50%;" data-toggle="tooltip" title="Baches" id="bache" class="draggable" src='images/bache.jpg'/>
            </div>   
            
             <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
              
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                        <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>                
                </div>
            </div>

        </div>                    
    </body>

</html>