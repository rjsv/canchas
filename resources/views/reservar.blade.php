<!-- reservar.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Cancha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background:#1A1A1A;">
    <div class="container mt-5" style="padding-right:calc(10vw);padding-left:calc(10vw);">
        <img src="{{ asset('img/logo.webp') }}" alt="">
        <h1 style="color:#739505;">Reservar Cancha {{ $cancha }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reserva.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="cancha" value="{{ $cancha }}">
            <div class="row">
                <div class="col">
                    <h3 class="text-white">Selecciona la fecha:</h3>
                    <input type="date" name="fecha" class="form-control mb-3" value="{{ old('fecha') }}" required>
                </div>
                <div class="col">
                    <h3 class="text-white">Selecciona la hora:</h3>
                    <input type="time" name="hora" class="form-control mb-3" value="{{ old('hora') }}" required>
                </div>
                <div class="col">
                    <h3 class="text-white">Precio:</h3>
                    <p class="text-white">S/ 80</p>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Reservar</button>
            </div>
        </form>

        <form action="{{ route('logOut') }}" method="POST" class="text-center mt-3">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>