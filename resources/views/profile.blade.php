<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #1A1A1A;
            color: #FFFFFF;
        }
        .container {
            margin-top: 5rem;
            padding-right: calc(10vw);
            padding-left: calc(10vw);
        }
        img.logo {
            max-width: 150px;
            margin-bottom: 1rem;
        }
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5 text-center">
        <img src="img/logo.webp" alt="Logo" class="logo">
        <h1 class="mb-4">Perfil de Usuario</h1>
        
        <!-- Tabla para mostrar los detalles del perfil -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered table-dark">
                    <tbody>
                        <tr>
                            <th scope="row">Nombre:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">DNI:</th>
                            <td>{{ $user->dni }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Categoría:</th>
                            <td>{{ $user->category }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de Nacimiento:</th>
                            <td>{{ $user->birthdate }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Sexo:</th>
                            <td>{{ $user->sex == 1 ? 'Masculino' : 'Femenino' }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Teléfono:</th>
                            <td>{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nivel:</th>
                            <td>{{ $user->level }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Mano Dominante:</th>
                            <td>{{ $user->dominant_hand == 1 ? 'Derecha' : 'Izquierda' }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ url('/') }}" class="btn mt-3" style="background:#739505;color:white;">Ir al Inicio</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>