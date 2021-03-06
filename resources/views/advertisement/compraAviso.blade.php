<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" >

    <title>Comprar anuncio</title>
  </head>
  <body>
    <div class="centered-div">
        
        <div class="col-6">
            <h1>Datos del anuncio</h1>

            <strong>Título</strong>
            <p> {{ $anuncio->Titulo }} </p>

            <strong> Descripción </strong>
            <p> {{ $anuncio->Descripcion }} </p>

            <strong> Cantidad </strong>
            <p> {{ $anuncio->Cantidad }} </p>

            <strong> Precio por unidad </strong>
            <p> {{ $anuncio->PrecioUnitario }}</p>
            <div>
                <a href="/advertisement">Volver</a>
            </div>
            <br>
            
            <form action="/advertisement/compra/{{$anuncio->id}}" method="POST">
                <input type = number min=1 name = "Cantidad"> </input>
                <button>Comprar</button>
            </form>
        </div>
    </div>
    
    <!-- cambios en advertisement-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>