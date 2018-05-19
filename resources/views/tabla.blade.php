<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />        
        <script src="{{ asset('css/jquery-ui.css') }}"></script>        
        <link href="{{ asset('css_propios/nav.css') }}" rel="stylesheet">      <link href="{{ asset('css_propios/tabla.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>        
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/gmaps.js') }}"></script>
        <script src="{{ asset('js_propios/tabla.js') }}"></script> 
        <script src="{{ asset('js_propios/nav.js') }}"></script>         
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        


    </head>    
    <body>

    <div style="padding-left:10%">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
    </div>                
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/">Home</a>
    </div>

     <div id="wrapper">
      <h1>Listado de aspectos</h1>
      <br>
      <br>
      <br>
    
      <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                    <th><span>id</span></th> 
                    <th><span>Nombre</span></th> 
                    <th><span>Fecha y Hora</span></th> 
            </tr>
        </thead>
        <tbody>
          <tr>
              @foreach($objeto1 as $object)
                <tr>
                    <td class="lalign">{{ $object->id }}</td>
                    <td class="lalign">{{ $object->nombre }}</td>
                    <td class="lalign">{{ $object->fecha_y_hora }}</td>
                </tr>
              @endforeach
              <?php if (is_null($objeto2)){die;} ?>
                @foreach($objeto2 as $entity)
                  <tr>
                    <td class="lalign">{{ $entity->id }}</td>
                    <td class="lalign">{{ $entity->nombre }}</td>
                    <td class="lalign">{{ $entity->fecha_y_hora }}</td>
                  </tr>
                @endforeach  
                
              
        </tbody>
      </table>
     </div> 
    </body>
</html>
