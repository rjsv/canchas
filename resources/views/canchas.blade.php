<!-- componente.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Cancha</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background:#1A1A1A;">
    <div class="container mt-5" style="padding-right:calc(20vw);padding-left:calc(20vw);">
        <img src="img/logo.webp" alt="">
        <h1 style="color:#739505;">Reserva de Cancha</h1>
        
        @if ($user)
            <h2 style="color:#FFFFFF;">Bienvenido, {{ $user->name }}</h2>
        @else
            <h2 style="color:#FFFFFF;">Bienvenido, Invitado</h2>
        @endif

        @if ($user)
        <form action="{{ route('logOut') }}" method="POST" class="text-center mt-3">
            {{ csrf_field() }} <!-- Agrega el token CSRF aquí -->
            <button type="submit" class="btn mb-2" style="background:#739505;color:white;">Cerrar sesión</button>
            <a href="{{ route('mostrarPerfil') }}" class="btn btn-primary">Ver Perfil</a> <!-- Botón para ver el perfil -->
        </form>
        @endif

        <p class="text-white">Revisa nuestra disponibilidad y reserva la fecha y hora que más te convengan.</p>

        <div class="row">
            @for ($i = 1; $i <= 6; $i++)
                <div class="col-4 mb-4">
                    <a href="{{ route('reservar', ['cancha' => $i]) }}" class="btn btn-primary" style="padding:60px;">{{ $i }}</a>
                </div>
            @endfor
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>