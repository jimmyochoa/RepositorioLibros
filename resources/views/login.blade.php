<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Página de Inicio de Sesión: Book Repository </title>

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
    @vite(['resources/css/style-register.css', 'resources/js/app.js'])
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <div class="login-icon">
                    <img src="/Users/Daniela/laravel/proyecto-BookRep/public/imagenes/logoVertical.png"
                        alt="Login Icon">
                </div>
                <h2>Iniciar Sesión</h2>
            </div>
            <form class="login-form">
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group form-footer">
                    <div class="checkbox">
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Recuérdame</label>
                    </div>
                    <a href="#" class="forgot-password">¿Olvidaste la contraseña?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-button">Login</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
