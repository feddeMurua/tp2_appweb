<!doctype html>
<html lang="{{ app()->getLocale() }}">
        <head>
            <title>AppWeb-Tp2</title>                      
            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script src="{{ asset('js/gmaps.js') }}"></script>
            <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset('css_propios/nav.css') }}" rel="stylesheet">            
            <link href="{{ asset('css_propios/map.css') }}" rel="stylesheet">            
        </head>
        <body>
            <div class="container-fluid">                
                <div class="row">                    
                    <div class="col-sm-2">
                        <br>
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#">About</a>
                            <a href="#">Eventos</a>
                            <a href="#">Ciudad</a>
                            <a href="#">Estados de Objetos</a>                            
                        </div>                                        
                    </div>
                    <div class="col-sm-8">
                        <h1 align="center">Eventos Registrados</h1>
                        <div id="mymap"></div>
                    </div>
                    <div class="col-sm-2">
                        <h1 align="center">Eventos</h1><br>
                        <div align="center">                            
                            <img data-toggle="tooltip" title="Accidentes de Tránsito" id="accidente" src="{{ asset('images/senial_accidente.jpg') }}" alt="Smiley face" width="50" height="50">
                            <br><br>
                            <img data-toggle="tooltip" title="Robos" id="robo" src="{{ asset('images/senial_robo.jpg') }}" alt="Smiley face" width="50" height="50">
                            <br><br>                            
                            <img data-toggle="tooltip" title="Animales Sueltos" id="animales" src="{{ asset('images/senial_animales.jpg') }}" alt="Smiley face" width="50" height="50">
                        </div>
                        <hr>
                        <h1 align="center">Objetos</h1><br>
                        <div align="center">                            
                            <img data-toggle="tooltip" title="Semáforos" id="semaforo" src="{{ asset('images/semaforo.jpg') }}" alt="Smiley face" width="50" height="50">
                            <br><br>
                            <img data-toggle="tooltip" title="Pérdida de Agua" id="perdida_agua" src="{{ asset('images/perdida_agua.jpg') }}" alt="Smiley face" width="50" height="50">
                            <br><br>
                            <img data-toggle="tooltip" title="Baches" id="bache" src="{{ asset('images/bache.jpg') }}" alt="Smiley face" width="50" height="50">    
                        </div>                        
                        <!--glyphicon glyphicon-list-->
                    </div>
                </div>
            </div>
            
            <!-- funciones de la nav bar -->
            <script src="{{ asset('js_propios/nav.js') }}"></script>
            
            <!-- funciones del mapa  -->
            <script src="{{ asset('js_propios/maps_custom.js') }}"></script>
            
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="{{ asset('js/jquery.js') }}"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{ asset('js/bootstrap.js') }}"></script>
            
        </body>
</html>
