<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La Odisea Gamer/Nueva-imagen-en-AiroHeart</title>
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('inicio')}}">La Odisea Gamer</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="{{route('inicio')}}">Inicio</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    
                    <article>
                        
                        <header class="mb-4">
                            
                            <h1 class="fw-bolder mb-1">{{$post->titulo_publicacion}}</h1>
                            
                            <div class="text-muted fst-italic mb-2">{{$post->fecha_publicacion}}</div>
                            
                            <a class="badge bg-secondary text-decoration-none link-light" href="{{route('pc')}}">{{$post->categoria_publicacion1}}</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="{{route('switch')}}">{{$post->categoria_publicacion2}}</a>
                        </header>
                        
                        <figure class="mb-4"><img class="img-fluid rounded" src="https://i.ibb.co/6t3jsF4/900-airo.png" alt="..." /></figure>
                      
                        <section class="mb-5">
                            <p class="fs-5 mb-4">{{$post->contenido_publicacion}}</p>
                            <p class="fs-5 mb-4">{{$post->contenido_publicacion2}}</p>
                            <p class="fs-5 mb-4">{{$post->contenido_publicacion3}}</p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/r9EhNTJ2NaQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </section>
                    </article>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; La Odisea Gamer 2022</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
