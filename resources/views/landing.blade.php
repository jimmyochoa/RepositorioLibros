<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Página de Inicio: Book Repository </title>

    <!--Cdn Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!--Estilo de google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">

    <!--Estilos de css-->
    @vite(['resources/css/style-landing.css', 'resources/js/app.js'])
</head>


<body>
    <div class="container my-5">
        <header class="text-center mb-4">
            <!-- navegación lol -->
            <nav class="navbar">
                <!-- Poner LOGO después-------------- -->
                <div class="navbar-brand">
                    <img src="{{ asset('public/imagenes/logoHorizontal.png') }}" alt="Logo">
                    </a>
                </div>


                <!-- Elementos de navegación -->
                <div class="ml-auto">
                    <ul class="nav">
                        <li class="nav-item"><a href="#"class="nav-link nav-link-custom">Inicio</a></li>
                        <li class="nav-item"><a href="http://127.0.0.1:8000/registro"
                                class="nav-link nav-link-custom">Registro</a></li>
                        <li class="nav-item"><a href="http://127.0.0.1:8000/login"
                                class="nav-link nav-link-custom">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <section>
            <!-- principal -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- Texto de introducción -->
                    <h1>Book Repository</h2>
                        <p class="lead">Tus historias no deben quedarse solo en tu cabeza</p>
                        <p>Navega por tus libros favoritos, guárdalos y léelos cuando quieras, donde quieras <br> </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Scelerisque felis imperdiet proin fermentum leo vel orci.
                            Feugiat
                            in fermentum posuere urna nec tincidunt praesent. Massa ultricies mi quis hendrerit. Ut
                            placerat
                            orci nulla pellentesque. Aliquam faucibus purus in massa tempor. Sem viverra aliquet eget
                            sit
                            amet tellus. Tellus id interdum velit laoreet id donec ultrices. Congue eu consequat ac
                            felis
                            donec et odio pellentesque. Posuere lorem ipsum dolor sit amet. Dictumst vestibulum rhoncus
                            est
                            pellentesque elit. Cursus euismod quis viverra nibh. Tempus iaculis urna id volutpat lacus
                            laoreet non. Morbi tincidunt ornare massa eget egestas purus. Tortor at auctor urna nunc id
                            cursus metus.</p>
                </div>
                <div class="col-lg-4">
                    <img src="https://i.pinimg.com/736x/12/ea/02/12ea028bef7de7f82a5bdae28217b368.jpg"
                        alt="Imágen de fondo" class="img-fluid">
                </div>
            </div>
        </section>

        <!--pie de página totalmente opcional -->
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
