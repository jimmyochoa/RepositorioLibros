<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro - Book Repository</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>body{font-family:Arial,sans-serif;background-color:#f8f9fa}.navbar{background-color:#38809a}.navbar-brand{color:#fff;font-weight:bold}.navbar-brand:hover{color:#a5e5d8}.navbar-toggler{background-color:#4fb3a1}.navbar-toggler-icon{color:#fff}.navbar-nav .nav-link{color:#fff}.container{max-width:600px;margin:50px auto}.card{border:none;border-radius:8px;box-shadow:0 4px 8px rgba(0,0,0,.1);transition:box-shadow .3s ease-in-out}.card:hover{box-shadow:0 8px 16px rgba(0,0,0,.2)}.card img{border-top-left-radius:8px;border-top-right-radius:8px}.card-body{padding:20px}.card-title{font-size:20px;font-weight:bold;margin-bottom:10px}.card-text{font-size:16px;color:#555}.btn-primary,.btn-secondary{background-color:#4fb3a1;border-color:#4fb3a1;padding:10px 15px;border-radius:4px;color:#fff;cursor:pointer;font-size:15px;width:100%;transition:background-color .3s}.btn-primary:hover,.btn-secondary:hover{background-color:#7FD1AE;border-color:#7FD1AE}.btn-success{background-color:#9068be;border-color:#9068be;padding:12px 20px;border-radius:4px;color:#fff;cursor:pointer;font-size:15px;width:100%;transition:background-color .3s}.btn-success:hover{background-color:#b597cc;border-color:#b597cc}.btn-success:focus{box-shadow:none}.btn-success i{margin-right:8px}</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('mybooks.index')}}">Book Repository</a>
        </div>
    </nav>

    <main style="margin-top: 58px;">
        <div class="container pt-4">
            <h1 class="text-center">Editar Libro</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('mybooks.update', ['book' => $book->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                        value="{{ $book->titulo }}" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                        required>{{ $book->descripcion }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input type="file" class="form-control" id="imagen" name="image">
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">URL:</label>
                    <input type="text" class="form-control" id="url" name="url"
                        value="{{ $book->url }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>

            <a href="{{ route('mybooks.index') }}" class="btn btn-secondary mt-3">Volver a Inicio</a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
