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

              
              

              @if(Session::has('mensaje'))
                <div class="alert alert-info my-5">
                {{Session::get('mensaje')}}
                </div>
              @endif

              @if(Session::has('error'))
              <div class="alert alert-danger my-5">
              {{Session::get('error')}}
              </div>
            @endif

            <div class="container">
              <a href="{{ url('/') }}">Regresar</a>
              <h2 >Horario de circulación para la placa terminada en: {{$dig}}</h2>
            </div> 


            <div class="container">
              <form action="{{route('registro.update','LUNES')}}" method="post">
                @csrf
                @METHOD('PUT')
              <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                  <label name="dia">Lunes:</label>
                  
                </div>
                <div class="form-group col-sm-3">
                  <label for="inicio">Hora Inicio:</label>
                  <input type="number" class="form-control" readonly value="{{$res[0]->H_INIC}}" min="0" max="24" placeholder="0" id="inicio" name="inicio">
                </div>
                <div class="form-group col-sm-3">
                  <label for="fin">Hora Fin:</label>
                  <input type="number" class="form-control" readonly placeholder="0" value="{{$res[0]->H_FIN}}" id="fin" name="fin">
                </div>
              </div>
            </form>
                
              <form action="{{route('registro.update','MARTES')}}" method="post">
                @csrf
                @METHOD('PUT')
              <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                  <label name="dia">Martes:</label>
                  
                </div>
                <div class="form-group col-sm-3">
                  <label for="inicio">Hora Inicio:</label>
                  <input type="number" class="form-control" readonly min="0" max="24" value="{{$res[1]->H_INIC}}" placeholder="0" id="inicio" name="inicio">
                </div>
                <div class="form-group col-sm-3">
                  <label for="fin">Hora Fin:</label>
                  <input type="number" class="form-control" readonly placeholder="0" value="{{$res[1]->H_FIN}}" id="fin" name="fin">
                </div>
              </div>
            </form>

              <form action="{{route('registro.update','MIERCOLES')}}" method="post">
                @csrf
                @METHOD('PUT')
              <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                  <label for="">Miercoles:</label>
                  
                </div>
                <div class="form-group col-sm-3">
                  <label for="inicio">Hora Inicio:</label>
                  <input type="number" class="form-control" readonly min="0" max="24" value="{{$res[2]->H_INIC}}" placeholder="0" id="inicio" name="inicio">
                </div>
                <div class="form-group col-sm-3">
                  <label for="fin">Hora Fin:</label>
                  <input type="number" class="form-control" readonly placeholder="0" value="{{$res[2]->H_FIN}}" id="fin" name="fin">
                </div>
              </div>
            </form>

              <form action="{{route('registro.update','JUEVES')}}" method="post">
                @csrf
                @METHOD('PUT')
              <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                  <label for="">Jueves:</label>
                  
                </div>
                <div class="form-group col-sm-3">
                  <label for="inicio">Hora Inicio:</label>
                  <input type="number" class="form-control"  readonly min="0" max="24" value="{{$res[3]->H_INIC}}" placeholder="0" id="inicio" name="inicio">
                </div>
                <div class="form-group col-sm-3">
                  <label for="finmj">Hora Fin:</label>
                  <input type="number" class="form-control" readonly placeholder="0" value="{{$res[3]->H_FIN}}" id="finm" name="fin">
                </div>
              </div>
            </form>

              <form action="{{route('registro.update','VIERNES')}}" method="post">
                @csrf
                @METHOD('PUT')
              <div class="form-group col-sm-12">
                <div class="form-group col-sm-3">
                  <label for="">Viernes:</label>
                  
                </div>
                <div class="form-group col-sm-3">
                  <label for="inicio">Hora Inicio:</label>
                  <input type="number" class="form-control" readonly min="0" max="24" value="{{$res[4]->H_INIC}}" placeholder="0" id="inicio" name="inicio">
                </div>
                <div class="form-group col-sm-3">
                  <label for="finmv">Hora Fin:</label>
                  <input type="number" class="form-control" readonly placeholder="0" value="{{$res[4]->H_FIN}}" id="finm" name="fin">
                </div>
              </div>
            </form>
            </div> <!-- Container -->
           
        </div>

        
    </div>
    </body>
</html>
