<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />        
        <script src="{{ asset('css/jquery-ui.css') }}"></script>        
        <link href="{{ asset('css_propios/nav.css') }}" rel="stylesheet">                    
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>        
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/gmaps.js') }}"></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">        
        
        <style type="text/css">
        
            *{
                margin: 0px;
                padding: 0px;
            }
            
            html { height: 100% }
            body{ height: 100%; margin: 0px; padding: 0px;}
            #map_canvas { height: 700px; width: 100%; border:1px solid red;}           
            .draggable {position:absolute; width: 30px; height: 30px;z-index:1000000000;}
                    
        </style>
        
        <script type="text/javascript">
          
          $(document).ready(function() {
                
                //---------------------------
                    $('#filtroFechaX').hide(); 
                    $('#nombreAspectoX').hide(); 
                    $("#linkNombre").on( "click", function() {
                        $('#nombreAspectoX').show(); 
                    });
                    $("#linkFecha").on( "click", function() {
                        $('#filtroFechaX').show(); 
                    });
                    //$("#linkNombre").on( "click", function() {
                    //    $('#nombreAspectoX').hide(); //oculto mediante id
                    //});


                //-----------------------                
                function cargar_opciones_accidentes(){
                    $('#aspectos').attr('action', '{{url('accidentes')}}');
                    $("#opciones").html("<div class='form-group col-md-8'>\
                                            <label class='radio-inline'><input type='radio' name='gravedad' value='Sin Lesionados'>Sin Lesionados</label>\
                                            <label class='radio-inline'><input type='radio' name='gravedad' value='Lesionados'>Lesionados</label>\
                                            <label class='radio-inline'><input type='radio' name='gravedad' value='Graves'>Graves</label>\
                                        </div>");                    
                }
                
                function cargar_opciones_robos(){
                    $('#aspectos').attr('action', '{{url('robos')}}');
                    $("#opciones").html("<div class='form-group col-md-8'>\
                                        <label class='radio-inline'><input type='radio' name='tipo' value='Hurto'>Hurto</label>\
                                        <label class='radio-inline'><input type='radio' name='tipo' value='Asalto'>Asalto</label>\
                                        <label class='radio-inline'><input type='radio' name='tipo' value='Asalto con Heridos'>Asalto con Heridos</label>\
                                    </div>");                    
                }

                function cargar_opciones_incendios(){
                    $('#aspectos').attr('action', '{{url('incendios')}}');
                    $("#opciones").html("<div class='form-group col-md-8'>\
                                        <label class='radio-inline'><input type='radio' name='objeto_afectado' value='Incendio de auto'>Auto</label>\
                                        <label class='radio-inline'><input type='radio' name='objeto_afectado' value='Incendio de vivienda/edificio público'>Vivienda/Edificio Público</label>\
                                        <label class='radio-inline'><input type='radio' name='objeto_afectado' value='Incendio de campo'>Campo</label>\
                                    </div>");                    
                }                              
                
               
                function cargar_opciones_baches(){
                    $('#aspectos').attr('action', '{{url('baches')}}');
                    $("#opciones").html("<div class='form-group col-md-8'>\
                                        <label class='radio-inline'><input type='radio' name='estado' value='calle en mal estado'>Calle Mal Estado</label>\
                                        <label class='radio-inline'><input type='radio' name='estado' value='calle bloqueada'>Calle Bloqueada</label>\
                                    </div>");                    
                }
                
                function cargar_opciones_agua(){
                    $('#aspectos').attr('action', '{{url('agua')}}');
                    $("#opciones").html("<div class='form-group col-md-8'>\
                                        <label class='radio-inline'><input type='radio' name='estado' value='pérdida'>Pérdida</label>\
                                        <label class='radio-inline'><input type='radio' name='estado' value='sin suministro'>Sin Suministro</label>\
                                    </div>");                    
                }
                
                function cargar_datos(ll, nombre){
                    $("#ubicacion").val(ll);
                    $("#nombre").val(nombre);
                }

                $("#accidente").draggable(
                    {helper: 'clone',
                        stop: function(e,ui) {
                        var mOffset=$($map.getDiv()).offset();
                        var point=new google.maps.Point(
                            ui.offset.left-mOffset.left+(ui.helper.width()/2),
                            ui.offset.top-mOffset.top+(ui.helper.height())
                        );
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_accidente(ll);        
                        setTimeout(function(){ 
                            cargar_opciones_accidentes();                        
                            $('#myModal').modal('toggle');
                            $('#myModal').modal('show');                                                    
                        },850);
                        cargar_datos(ll, "Accidente");                
                        }
                    });

                $("#robo").draggable(
                    {helper: 'clone',
                        stop: function(e,ui) {
                        var mOffset=$($map.getDiv()).offset();
                        var point=new google.maps.Point(
                            ui.offset.left-mOffset.left+(ui.helper.width()/2),
                            ui.offset.top-mOffset.top+(ui.helper.height())
                        );
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_robo(ll);
                        setTimeout(function(){ 
                            cargar_opciones_robos();                        
                            $('#myModal').modal('toggle');
                            $('#myModal').modal('show');                                                    
                        },850);
                        cargar_datos(ll, "Robo");                        
                        }
                    });

                $("#incendio").draggable(
                    {helper: 'clone',
                        stop: function(e,ui) {
                        var mOffset=$($map.getDiv()).offset();
                        var point=new google.maps.Point(
                            ui.offset.left-mOffset.left+(ui.helper.width()/2),
                            ui.offset.top-mOffset.top+(ui.helper.height())
                        );
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_incendio(ll);
                        setTimeout(function(){ 
                            cargar_opciones_incendios();                        
                            $('#myModal').modal('toggle');
                            $('#myModal').modal('show');                                                    
                        },850);
                        cargar_datos(ll, "Incendio");                       
                        }
                    });             

                $("#servicio_agua").draggable(
                    {helper: 'clone',
                        stop: function(e,ui) {
                        var mOffset=$($map.getDiv()).offset();
                        var point=new google.maps.Point(
                            ui.offset.left-mOffset.left+(ui.helper.width()/2),
                            ui.offset.top-mOffset.top+(ui.helper.height())
                        );
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point);
                        placeMarker_perdida_agua(ll);   
                        setTimeout(function(){ 
                            cargar_opciones_agua();                        
                            $('#myModal').modal('toggle');
                            $('#myModal').modal('show');                                                    
                        },850);
                        cargar_datos(ll, "Servicio Agua");             
                        }
                    });
               
                $("#bache").draggable(
                    {helper: 'clone',
                        stop: function(e,ui) {
                        var mOffset=$($map.getDiv()).offset();
                        var point=new google.maps.Point(
                            ui.offset.left-mOffset.left+(ui.helper.width()/2),
                            ui.offset.top-mOffset.top+(ui.helper.height())
                        );
                        var ll=overlay.getProjection().fromContainerPixelToLatLng(point)                        
                        placeMarker_bache(ll);  
                        setTimeout(function(){ 
                            cargar_opciones_baches();                        
                            $('#myModal').modal('toggle');
                            $('#myModal').modal('show');                                                    
                        },850);
                        cargar_datos(ll, "Bache");                             
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
                
                google.maps.event.addListener(marker,  'rightclick',  function(mouseEvent) { marker.setMap(null); });                          
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
                
                google.maps.event.addListener(marker,  'rightclick',  function(mouseEvent) { marker.setMap(null); });                          
                
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

            function placeMarker_incendio(location) {
                var marker = new google.maps.Marker({
                    position: location, 
                    map: $map,
                    icon:{
                        url: "images/incendio.jpg",
                        scaledSize: new google.maps.Size(34, 34)
                    },
                    draggable:true,
                    animation: google.maps.Animation.DROP,
                });   
                google.maps.event.addListener(marker,  'rightclick',  function(mouseEvent) { marker.setMap(null); });                                    
            }
            /*
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
            */
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
                google.maps.event.addListener(marker,  'rightclick',  function(mouseEvent) { marker.setMap(null); });
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
                google.maps.event.addListener(marker,  'rightclick',  function(mouseEvent) { marker.setMap(null); });
            }

        </script>
    </head>

    <body onload="initialize()">                
        <div class="row">                                    
            <div class="col-sm-2">
                <br>
                <div style="padding-left:10%">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
                </div>                
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#">About</a>
                    <a href="/eventos">Filtrado por Eventos</a> 
                    <a href="/objetos">Filtrado por Estados de Objetos</a> 
                    <a id="linkFecha" ">Filtrado por Fecha</a>
                    <div id = "filtroFechaX">
                        <form action="/fecha" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="fecha1" id="fecha1" placeholder="Desde">
                            <input type="text" name="fecha2" id="fecha1" placeholder="Hasta">
                            <button type="submit">Enviar</button>
                        </form>
                    </div>
                    <a id="linkNombre">Filtrado por Tipo de Aspecto</a>
                    <div id = "nombreAspectoX">
                        <form action="/filtro" method="POST">
                            {{ csrf_field() }}
                            <input type="text" name="aspectName" id="aspectName">
                            <button type="submit">Enviar</button>
                        </form>
                    </div>    
                </div>
            </div>
            <div class="col-sm-8">
                <h1 align="center"> Mapa de Aspectos</h1><br>                                                
                <div id="map_canvas"></div>
            </div>
            <div class="col-sm-2">
                <h1 align="center">Eventos</h1><br>
                <div align="center">                            
                    <img data-toggle="tooltip" title="Accidentes de Tránsito" id="accidente" class="draggable" src='images/senial_accidente.jpg'/>                    
                    <br><br>
                    <img data-toggle="tooltip" title="Robos" id="robo" class="draggable" src='images/senial_robo.jpg'/>                    
                    <br><br>
                    <img data-toggle="tooltip" title="Incendios" id="incendio" class="draggable" src='images/incendio.jpg'/>                                        
                    <br><br>  
                </div>
                <hr>
                <h1 align="center">Objetos</h1><br>
                <div align="center">
                    <!--                            
                    <img data-toggle="tooltip" title="Semáforos" id="semaforos" class="draggable" src='images/semaforo.jpg'/>
                    <br><br>
                    -->
                    <img data-toggle="tooltip" title="Servicio de Agua" id="servicio_agua" class="draggable" src='images/perdida_agua.jpg'/>
                    <br><br>
                    <img data-toggle="tooltip" title="Baches" id="bache" class="draggable" src='images/bache.jpg'/>                  
                </div>                                        
            </div>
        </div>
        
        <!-- funciones de la nav bar -->
        <script src="{{ asset('js_propios/nav.js') }}"></script>        
        
        <div class="row">            
             <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">              
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Nuevo Aspecto</h4>
                        </div>
                        <div class="modal-body">                                                                                                                    
                            <form id="aspectos" method="post">        
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div style="display:none" class="form-group col-md-4">
                                        <!--form evento, campo nombre-->                                        
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div style="display:none" class="form-group col-md-4">
                                        <!--form evento, campo ubicacion-->                                        
                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                                    </div>
                                </div>
                                <div class="row" id="opciones">                                    
                                    <!--div donde se cargan las opciones de cada evento-->                              
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitForms()">Confirmar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                            <script>
                                submitForms = function(){                                    
                                    document.getElementById("aspectos").submit();
                                    $('#myModal').on('hidden.bs.modal', function () {
                                    alert("Aspecto registrado correctamente...")
                                    })
                                }
                            </script>
                        </div>
                    </div>                        
                </div>                
            </div>
        </div>                        
    </body>
</html>
