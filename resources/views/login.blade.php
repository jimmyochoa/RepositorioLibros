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

    <style rel="stylesheet">body{font-family:'Bentham',serif;background-color:#BEDDE2;margin:0;padding:0;display:flex;justify-content:center;align-items:center;height:100vh;}.login-container{text-align:center;}.login-box{background-color:#edeae5;border-radius:8px;box-shadow:0 4px 8px rgba(0,0,0,0.1);width:400px;margin:auto;padding:20px;}.login-header{margin-bottom:10px;}.login-icon img{width:100px;}.h2{color:#2F4858;margin:10px 0;}.login-form{text-align:left;}.form-group{margin-bottom:15px;}.form-group label{display:block;color:#2F4858;margin-bottom:5px;}.form-group input{width:100%;padding:10px;border:none;border-radius:4px;margin-bottom:10px;background-color:#c9cbc9;color:#2c3e50;}.login-button{width:100%;padding:10px;border:none;border-radius:4px;background-color:#4fb3a1;color:white;cursor:pointer;font-size:15px;}.login-button:hover{background-color:#7FD1AE;}.form-footer{display:flex;justify-content:space-between;align-items:center;}.checkbox label{color:black;font-size:14px;cursor:pointer;}.checkbox input{margin-right:5px;text-align:center;}.forgot-password:hover{text-decoration:underline;}
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <div class="login-icon">
                    <img src="https://kajabi-storefronts-production.kajabi-cdn.com/kajabi-storefronts-production/blogs/25583/images/ojFYHciRPq3uX8OMXXDN_Learn_Biomimicry_Logo_-_Square_-_Transparent_with_Blue_Gradient_-_LRG.png"
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
