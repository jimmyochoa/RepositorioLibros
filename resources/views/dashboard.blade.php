<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Book Repository</title>
    <!--Cdn Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Lato', sans-serif;
                font-style: italic; /* Todos los textos en Lato cursiva, excepto los títulos */
            }
    
            .card-header h3 {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-style: normal; /* Montserrat normal para títulos */
            }
        </style>

    </head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Bienvenido, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
                        <p>Tu dirección de correo electrónico es: {{ Auth::user()->email }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

