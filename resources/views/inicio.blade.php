<!doctype html>
<html lang="{{ app()->getLocale() }}">
        <head>
            <title>AppWeb-Tp2</title>                      
            <script src="{{ asset('js/maps_api.js') }}"></script>
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
                            <label for="accidente"> Accidentes de Tránsito</label><br>
                            <img id="accidente" src="{{ asset('images/senial_accidente.jpg') }}" alt="Smiley face" width="50" height="50">
                            <br><br>
                            <label for="accidente"> Robos</label><br>
                            <img id="accidente" src="{{ asset('images/senial_robo.jpg') }}" alt="Smiley face" width="50" height="50">
                            <br><br>
                            <label for="accidente"> Animales Sueltos</label><br>
                            <img id="accidente" src="{{ asset('images/senial_animales.jpg') }}" alt="Smiley face" width="50" height="50">
                        </div>                       
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
