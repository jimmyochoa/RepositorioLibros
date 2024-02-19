<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Libro</title>
    <!-- Cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo de google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bentham&display=swap" rel="stylesheet">
    <!-- Estilos de css -->
    <style>
        body {
            font-family: 'Bentham', serif;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin-top: 50px;
        }

        .book-details {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .book-details h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .book-details img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .comments {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .comment {
            margin-bottom: 20px;
        }

        .comment .user {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .comment .date {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }

        .comment p {
            margin-bottom: 0;
        }

        .add-comment {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="book-details">
                    <h2>{{ $book->titulo }}</h2>
                    <img src="{{ asset($book->imagen) }}" alt="{{ $book->titulo }}">
                    <p><strong>Autor:</strong> {{ $book->author->first_name }}</p>
                    <p><strong>Descripción:</strong> {{ $book->descripcion }}</p>
                    <a href="{{ $book->url }}" class="btn btn-primary">Leer libro</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="comments">
                    <h3>Comentarios</h3>
                    <div class="comment">
                        <p class="user">Nombre de Usuario</p>
                        <p class="date">Fecha del Comentario</p>
                        <p>Contenido del Comentario</p>
                    </div>
                    <!-- Más comentarios aquí -->
                </div>
                <div class="add-comment">
                    <h3>Agregar Comentario</h3>
                    <!-- Formulario para agregar comentario -->
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="comment">Tu Comentario</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Comentario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

