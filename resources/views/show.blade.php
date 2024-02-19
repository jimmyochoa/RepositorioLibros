<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Libro</title>
    <!-- Cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Estilo de Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

    <!-- Estilos de css -->
    <style>
        body {
            font-family: 'Lato', serif;
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

        .book-details p {
            margin-bottom: 10px; /* Reducido el margen inferior del párrafo */
            word-wrap: break-word; /* Permite que el texto se ajuste dentro del contenedor */
        }

        .comments {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .comment {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
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
            word-wrap: break-word; /* Permite que el texto se ajuste dentro del contenedor */
            overflow-wrap: break-word; /* Controla el desbordamiento de palabras largas */
        }

        .add-comment {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .add-comment textarea {
            width: 100%;
            resize: vertical; /* Permite redimensionar verticalmente si el contenido excede */
        }

        .auth-buttons {
            margin-top: 20px;
        }

        .back-button {
            margin-bottom: 20px;
             color: #00AABF;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="back-button">
                    <a href="{{ route('landing') }}" class="btn btn-secondary">Volver a inicio</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="book-details">
                    <h2>{{ $book->titulo }}</h2>
                    <img src="{{ asset($book->imagen) }}" alt="{{ $book->titulo }}">
                    <p><strong>Autor:</strong> {{ $book->author->first_name }}</p>
                    <p><strong>Descripción:</strong></p>
                    <p>{{ $book->descripcion }}</p>
                    <a href="{{ $book->url }}" class="btn btn-primary">Leer libro</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="comments">
                    <h3>Comentarios</h3>
                    @foreach($comments as $comment)
                    <div class="comment">
                        <p class="user">{{ $comment->user->first_name }} {{ $comment->user->second_name }}</p>
                        <p class="date">{{ $comment->created_at->diffForHumans() }}</p>
                        <p>{{ $comment->content }}</p>
                        @if(auth()->check() && $comment->user_id === auth()->id())
                            <form action="{{ route('books.deleteComment', ['bookId' => $book->id, 'commentId' => $comment->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar comentario</button>
                            </form>
                        @endif
                    </div>
                    @endforeach
                </div>
                @auth
                <div class="add-comment">
                    <h3>Agregar Comentario</h3>
                    <form action="{{ route('books.addComment', ['id' => $book->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="content">Tu Comentario (Máximo 250 palabras)</label>
                            <textarea class="form-control" id="content" name="content" rows="3" maxlength="250" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Comentario</button>
                    </form>
                </div>
                @else
                <div class="auth-buttons">
                    <p>Debes iniciar sesión para agregar un comentario.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
                    <a href="{{ route('registro') }}" class="btn btn-secondary">Registrarse</a>
                </div>
                @endauth
            </div>
        </div>
    </div>
        <!--pie de página -->
        <footer class="text-center mt-4">
            <p>&copy; Lenguajes de Programación - proyecto laravel lol*</p>
        </footer>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

