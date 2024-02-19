<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Libros - Book Repository</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>body{font-family:'Roboto',sans-serif;background-color:#f8f9fa;color:#fff;}.navbar{background-color:#417485;}.navbar-brand{color:#fff;font-weight:bold;}.navbar-brand:hover{color:#a5e5d8;}.container{max-width:1200px;margin:50px auto;}.card{border:none;border-radius:8px;box-shadow:0 4px 8px rgba(0,0,0,0.1);transition:box-shadow 0.3s ease-in-out;}.card:hover{box-shadow:0 8px 16px rgba(0,0,0,0.2);}.card img{border-top-left-radius:8px;border-top-right-radius:8px;}.card-body{padding:20px;}.card-title{font-size:20px;font-weight:bold;margin-bottom:10px;color:#000;}.card-text{font-size:16px;}.btn-primary,.btn-primary:hover{background-color:#32527b;border-color:#32527b;padding:12px 20px;border-radius:4px;color:#fff;cursor:pointer;font-size:15px;transition:background-color 0.3s;}.btn-success,.btn-success:hover{background-color:#D7A9E3;border-color:#D7A9E3;padding:12px 20px;border-radius:4px;color:#fff;cursor:pointer;font-size:15px;transition:background-color 0.3s;}.btn-danger,.btn-danger:hover{background-color:#88CCF1;border-color:#88CCF1;padding:12px 20px;border-radius:4px;color:#fff;cursor:pointer;font-size:15px;transition:background-color 0.3s;}.btn-danger:focus{box-shadow:none;}.btn-danger i{margin-right:8px;}.btn-logout{background-color:transparent;border-color:transparent;color:#000;}.btn-logout:hover{background-color:transparent;border-color:transparent;color:#000;}.btn-agregar-libro{background-color:#D7A9E3;border-color:#D7A9E3;padding:12px 20px;border-radius:4px;color:#fff;cursor:pointer;font-size:15px;transition:background-color 0.3s;}.btn-agregar-libro:hover{background-color:#B5EAD7;border-color:#B5EAD7;}.bienvenido-texto{color:#fff;}.titulo-mis-libros{color:#000;}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('mybooks.index')}}">Book Repository</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bienvenido-texto" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-user bienvenido-texto"></i> Bienvenido, {{ Auth::user()->first_name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-logout dropdown-item">Cerrar sesión</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin-top: 58px;">
        <div class="container pt-4">
            <h1 class="text-center titulo-mis-libros">Mis Libros</h1>
            <div class="row mt-4">
                @foreach($books as $libro)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($libro->imagen) }}" class="card-img-top" alt="{{ $libro->titulo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $libro->titulo }}</h5>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('mybooks.edit', ['book' => $libro->id]) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('mybooks.destroy', ['book' => $libro->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este libro?')">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('mybooks.create') }}" class="btn btn-primary btn-lg"><i class="fas fa-plus-circle"></i> Añadir Nuevo Libro</a> <!-- Modificado -->
                <a href="{{ route('landing') }}" class="btn btn-success btn-lg"><i class="fas fa-home"></i> Ir a la Página de Inicio</a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $books->links() }}
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
