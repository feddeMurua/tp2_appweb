<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
        <h2>Create An Entity</h2><br />
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <form method="post" action="{{url('entities')}}">        
            {{csrf_field()}}
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                <label for="fecha_y_hora">Fecha y Hora:</label>
                <input type="text" class="form-control" name="fecha_y_hora">
            </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="ubicacion">Ubicacíon:</label>
                    <input type="text" class="form-control" name="ubicacion">
                </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add Entity</button>
            </div>
            </div>
        </form>      
    </div>
  </body>
</html>