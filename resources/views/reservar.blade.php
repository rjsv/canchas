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
        <img src="img/logo.webp" alt="">
        <h1 style="color:#739505;">Reservar Cancha {{ $cancha }}</h1>

        <div class="row">
            <div class="col">
                <h3 class="text-white">Selecciona la fecha:</h3>
                <input type="date" class="form-control mb-3">
            </div>
            <div class="col">
                <h3 class="text-white">Selecciona la hora:</h3>
                <input type="time" class="form-control mb-3">
            </div>
            <div class="col">
                <h3 class="text-white">Precio:</h3>
                <p class="text-white">S/ 80</p>
            </div>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-success">Reservar</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>