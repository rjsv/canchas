<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background:#1A1A1A;">
    <div class="container mt-5" style="padding-right:calc(20vw);padding-left:calc(20vw);">
        <img src="img/logo.webp" alt="">
        <h1 style="color:#739505;">Registrarse</h1>

        @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('attemptRegister') }}">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="name" class="form-label" style="color:white;">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="color:white;">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color:white;">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label" style="color:white;">Confirmar contraseña</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label" style="color:white;">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ old('dni') }}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label" style="color:white;">Categoría</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label" style="color:white;">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}">
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label" style="color:white;">Sexo</label>
                <select class="form-select" id="sex" name="sex">
                    <option value="0" {{ old('sex') == 0 ? 'selected' : '' }}>Masculino</option>
                    <option value="1" {{ old('sex') == 1 ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label" style="color:white;">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
            </div>
            <!-- <div class="mb-3">
                <label for="photo" class="form-label" style="color:white;">Foto</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
            </div> -->
            <div class="mb-3">
                <label for="level" class="form-label" style="color:white;">Nivel</label>
                <input type="number" class="form-control" id="level" name="level" value="{{ old('level', 0) }}">
            </div>
            <div class="mb-3">
                <label for="dominant_hand" class="form-label" style="color:white;">Mano dominante</label>
                <select class="form-select" id="dominant_hand" name="dominant_hand">
                    <option value="0" {{ old('dominant_hand') == 0 ? 'selected' : '' }}>Derecha</option>
                    <option value="1" {{ old('dominant_hand') == 1 ? 'selected' : '' }}>Izquierda</option>
                </select>
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember" style="color:white;">Recordarme</label>
            </div> -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn" style="background:#739505;">Registrarse</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
