<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Libro - Book Repository</title>
    <!-- CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <style>
        .btn-primary,
        .btn-success {
            background-color: #4fb3a1;
            border-color: #4fb3a1;
            padding: 10px 15px;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
            transition: background-color .3s
        }

        .btn-primary:hover {
            background-color: #7FD1AE;
            border-color: #7FD1AE
        }

        .btn-success {
            background-color: #9068be;
            border-color: #9068be;
            padding: 12px 20px
        }

        .btn-success:hover {
            background-color: #b597cc;
            border-color: #b597cc
        }

        .navbar {
            background-color: #38809a
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold
        }

        .navbar-brand:hover {
            color: #a5e5d8
        }

        .container {
            max-width: 1200px;
            margin: 50px auto
        }

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2)
        }

        .card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px
        }

        .card-body {
            padding: 20px
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px
        }

        .card-text {
            font-size: 16px;
            color: #555
        }

        .btn-danger {
            background-color: #ffa500;
            border-color: #ffa500;
            padding: 12px 20px;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
            transition: background-color .3s
        }

        .btn-danger:hover {
            background-color: #ffcc80;
            border-color: #ffcc80
        }

        .btn-danger:focus {
            box-shadow: none
        }

        .btn-danger i {
            margin-right: 8px
        }

        .btn-logout {
            background-color: transparent;
            border-color: transparent;
            color: #000
        }

        .btn-logout:hover {
            background-color: transparent;
            border-color: transparent;
            color: #000
        }

        .btn-back-to-home {
            background-color: #4fb3a1;
            border-color: #4fb3a1;
            padding: 10px 20px;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            font-size: 15px;
            transition: background-color .3s, transform .3s
        }

        .btn-back-to-home:hover {
            background-color: #7FD1AE;
            border-color: #7FD1AE;
            transform: scale(1.05)
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('mybooks.index')}}">Book Repository</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-user"></i> Bienvenido, {{ Auth::user()->first_name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-logout dropdown-item"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center">Crear Nuevo Libro</h1>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('mybooks.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo"
                                placeholder="Ingrese el título del libro">
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                                placeholder="Ingrese la descripción del libro"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>

                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" class="form-control" id="url" name="url"
                                placeholder="Ingrese la URL del libro">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Crear Libro</button>
                        </div>
                    </form>

                    <!-- Botón "Volver a Inicio" -->
                    <div class="text-center mt-3">
                        <a href="{{ route('mybooks.index') }}" class="btn btn-back-to-home"><i
                                class="fas fa-home"></i> Volver a Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- CDN de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
