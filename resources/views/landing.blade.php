<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio: Book Repository</title>

    <!-- Cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo de google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">

    <!-- Estilos de css -->
    <style>body{font-family:'Bentham',serif;color:#333;background-color:#BEDDE2;}.navbar{background-color:#ffffff;border-radius:10px;padding:20px;box-shadow:0px 2px 10px rgba(0, 0, 0, 0.1);}.navbar-text{margin-bottom:25px;display:flex;align-items:center;flex-direction:column;}.navbar-brand{font-size:1.5rem;font-weight:bold;color:#333;}.nav-link{color:#333;font-size:1rem;margin-left:1rem;transition:color 0.3s ease;}.nav-link:hover{color:#2F4858;}section{background-color:#fff;padding:2rem;box-shadow:0 0.5rem 1rem rgba(0,0,0,0.1);margin-bottom:2rem;}h1{font-size:2rem;font-weight:bold;margin-bottom:1rem;}.lead{font-size:1.5rem;margin-bottom:1.5rem;}img.img-fluid{margin-top:1rem;box-shadow:0 0.5rem 1rem rgba(0,0,0,0.1);}footer{color:#777;padding:1rem 0;font-size:0.8rem;}.nav-link-custom{margin-right:4rem;}.book-card{margin-bottom:1.5rem;border:none;border-radius:8px;box-shadow:0 4px 8px rgba(0,0,0,0.1);transition:box-shadow 0.3s ease-in-out;}.book-card:hover{box-shadow:0 8px 16px rgba(0,0,0,0.2);}.book-card img{border-top-left-radius:8px;border-top-right-radius:8px;}.book-card-body{padding:20px;}.book-card-title{font-size:20px;font-weight:bold;margin-bottom:10px;}.book-card-text{font-size:16px;color:#555;}.pagination{justify-content:center;margin-top:2rem;}#about{padding:4rem 0;background-color:#f8f9fa;text-align:center;}#about img{width:300px;height:auto;border-radius:50%;box-shadow:0 0 20px rgba(0, 0, 0, 0.1);}#products{padding:4rem 0;background-color:#f8f9fa;}#products .pagination{margin-top:2rem;}#products .card{margin-bottom:1.5rem;border:none;border-radius:8px;box-shadow:0 4px 8px rgba(0,0,0,0.1);transition:box-shadow 0.3s ease-in-out;}#products .card:hover{box-shadow:0 8px 16px rgba(0,0,0,0.2);}#products .card img{border-top-left-radius:8px;border-top-right-radius:8px;}#products .card-body{padding:20px;}#products .card-title{font-size:20px;font-weight:bold;margin-bottom:10px;}#products .card-text{font-size:16px;color:#555;}
    </style>

</head>

<body>
    <div class="container my-5">
        <header class="text-center mb-4">
            <!-- Navegación -->
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/blogs/25583/images/ojFYHciRPq3uX8OMXXDN_Learn_Biomimicry_Logo_-_Square_-_Transparent_with_Blue_Gradient_-_LRG.png"
                            alt="Logo" width="150" height="150">
                    </a>
                    <ul class="nav">
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
                                <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">Salir</button>
                            </form>

                        @endguest
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Contenido de la página -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="mb-4">Sobre Nosotros</h2>
                        <p class="lead">Somos un repositorio en línea donde puedes compartir tus libros y explorar los libros de otros autores. Únete a nuestra comunidad de lectores y descubre nuevas historias.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://i.pinimg.com/736x/12/ea/02/12ea028bef7de7f82a5bdae28217b368.jpg"
                            alt="Imágen de fondo" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <h2 class="text-center mb-5">Nuestros Libros</h2>
                <div class="row">
                    @foreach($books as $book)
                    <div class="col-lg-4">
                        <div class="card book-card">
                            <img src="{{ asset($book->imagen) }}" class="card-img-top" alt="{{ $book->titulo }}">
                            <div class="card-body book-card-body">
                                <h5 class="card-title book-card-title">{{ $book->titulo }}</h5>
                                <p class="card-text book-card-text">Publicado por: {{ $book->user->first_name }}</p>
                                <div class="mt-3">
                                    <a href="{{ route('show_libro', ['id' => $book->id]) }}" class="btn btn-primary">Ver Libro</a>
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
