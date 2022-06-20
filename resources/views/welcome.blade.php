<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ExpoFlores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            h1{
                color: #3399ff;
              
            }

            h2{
                color: #0f0f37;
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

              <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1>ExpoFlores</h1>      
                    <p>Horario de Pico y Placa</p>
                </div>
              </div>
            
              <div class="container">
                <h2>BIENVENIDO</h2>
                  <br>
                  <form action="{{route('DIGITO.index')}}" method="GET">
              
                <div class="form-group col-sm-6">
                    <div class="form-group col-sm-4">
                  <label for="placa">Placa del vehiculo:</label>
                    </div>
                  <div class="form-group col-sm-8">
                  <input type="text" class="form-control" name="placa" placeholder="Ingrese la placa" id="placa" pattern=".{6}" required>
                </div>
                </div>
                <div class="form-group col-sm-6">      
                <button type="submit" class="btn btn-primary">Consultar</button>
              </div>
           
            </form>
          </div> 
          <div class="container">
                <form action="{{route('registro.index')}}" method="GET">
                  @csrf
                  @METHOD('GET')
                  <div class="form-group col-sm-6">
                  <div class="form-group col-sm-3">
                    <select class="form-control " id="digito" name="digito">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>0</option>
                      
                    </select>
                  </div>
                  <div class="form-group col-sm-3">
                    <button type="submit" class="btn btn-warning">Configurar Digito</button>
                  </div>
                
                </div>
              </form>
            </div>
        </div>
      
      </div>
        
    </div>
    </body>
</html>
