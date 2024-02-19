<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio: Book Repository</title>

    <!-- Cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo de Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

    <!-- Estilos de css -->
    <style>
        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            background-color: #0081A8;

        }

        /* Ajustes para la barra de navegación */
        .navbar {
            background-color: #E6F4F1;
            padding: 0.5rem 1rem; /* Reduce el padding para hacer la barra más pequeña */
        }

        .navbar-brand {
            margin-right: 5rem; /* Asegura un espacio después del logo */
        }

        .navbar-nav .nav-item .nav-link {
            margin-right: 5em; /* Espacio entre opciones de navegación */
            padding: 0.5rem 1rem; /* Espacio alrededor del texto para una mejor legibilidad */
        }

        .navbar-nav .nav-item:last-child .nav-link {
            margin-right: 0; /* No añade margen al último elemento */
        }

        /* Estilo para el mensaje de bienvenida cuando el usuario ha iniciado sesión */
        .navbar-text {
            color: #ffffff; /* Color del texto cuando el usuario está logueado */
            background-color: #00AABF; /* Color de fondo para destacar */
            border-radius: 5px; /* Bordes redondeados */
            padding: 0.375rem 0.75rem; /* Espacio alrededor del texto */
            margin-left: 0.5rem; /* Espacio antes del mensaje de bienvenida */
            margin-right: 4rem;
        }

    form.nav-link {
        padding: 0.5rem 1rem;
        margin: 2; 
    }

        .hero {
            background-color: #c484b7;
            padding: 50px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
        }

        .hero p {
            font-size: 1.25rem;
            font-family: 'Lato', sans-serif;
            color: #fff;
        }

        img.img-fluid {
            object-fit: cover;
            height: 300px;
            width: 100%;
        }

        footer {
            color: #e7e4e4;
            padding: 1rem 0;
            font-size: 0.8rem;
        }

        .book-card {
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .book-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .book-card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .book-card-body {
            padding: 20px;
        }

        .book-card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }

        .book-card-text {
            font-size: 15px;
            color: #555;
        }

        .pagination {
            justify-content: center;
            margin-top: 2rem;
        }

        #about {
            padding: 4rem 0;
            background-color: #ffffff;
            text-align: center;
        }

        #about img {
            width: 300px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        #products {
            padding: 4rem 0;
            background-color: #E6F4F1; 
        }

        #products .pagination {
            margin-top: 2rem;
        }

        #products .card {
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        #products .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        #products .card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        #products .card-body {
            padding: 20px;
        }

        #products .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        #products .card-text {
            font-size: 16px;
            color: #555;
        }
    </style>

</head>

<body>
    <div class="container my-5">
        <header class="text-center mb-4">
            <!-- Navegación -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/blogs/25583/images/ojFYHciRPq3uX8OMXXDN_Learn_Biomimicry_Logo_-_Square_-_Transparent_with_Blue_Gradient_-_LRG.png"
                            alt="Logo" width="100" height="100">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    </a>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="{{ route('landing') }}" class="nav-link">Inicio</a>
                        </li>

                        @guest
                            <li class="nav-item">
                                <a href="{{ route('registro') }}" class="nav-link">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('mybooks.index') }}" class="nav-link">Mis libros</a>
                            </li>
                            <li class="nav-item">
                                <div class="navbar-text">Bienvenido &nbsp; {{ Auth::user()->first_name }}</div>
                            </li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link"
                                    style="border: none; background: none; cursor: pointer;">Salir</button>
                            </form>

                        @endguest
                    </ul>
                </div>
            </nav>
        </header>


        <!-- Sección hero con título y subtítulo -->
<div class="hero">
    <div class="container">
      <h1>Your forever Virtual Library</h1>
      <p>Porque tus ideas no tienen que quedarse solo en tu cabeza</p>
    </div>
  </div>


        <section id="products">
            <div class="container">
                <h2 class="text-center mb-5">Libros recientemente publicados de nuestros colaboradores:</h2>
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-lg-4">
                            <div class="card book-card">
                                <img src="{{ asset($book->imagen) }}" class="card-img-top" alt="{{ $book->titulo }}">
                                <div class="card-body book-card-body">
                                    <h5 class="card-title book-card-title">{{ $book->titulo }}</h5>
                                    <p class="card-text book-card-text">Publicado por: {{ $book->user->first_name }}</p>
                                    <div class="mt-3">
                                        <a href="{{ route('show_libro', ['id' => $book->id]) }}"
                                            class="btn btn-primary">Ver Libro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Paginación -->
                <div class="pagination mt-5">
                    {{ $books->links() }}
                </div>
            </div>
        </section>

        <!--pie de página -->
        <footer class="text-center mt-4">
            <p>&copy; Lenguajes de Programación - proyecto laravel lol*</p>
        </footer>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
