<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La Odisea Gamer</title>
  
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
       
        <link href="/css/styles.css" rel="stylesheet" />
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

        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">¡Bienvenidos!</h1>
                    <p class="lead mb-0">Esta es la seccion de noticias de Nintendo Switch.</p>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="/img/dd.png" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$post->fecha_publicacion}}</div>
                            <h2 class="card-title">{{$post->titulo_publicacion}}</h2>
                            <p class="card-text">{{$post->contenido_publicacion}}</p>
                            <a class="btn btn-primary" href="{{route('post4')}}">Leer más...</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/img/starwars.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->fecha_publicacion2}}</div>
                                    <h2 class="card-title h4">{{$post->titulo_publicacion2}}</h2>
                                    <p class="card-text">{{$post->contenido_publicacion2}}</p>
                                    <a class="btn btn-primary" href="{{route('post5')}}">Leer más...</a>
                                </div>
                            </div>
                        
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/img/blackwind.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->fecha_publicacion3}}</div>
                                    <h2 class="card-title h4">{{$post->titulo_publicacion3}}</h2>
                                    <p class="card-text">{{$post->contenido_publicacion3}}</p>
                                    <a class="btn btn-primary" href="{{route('post6')}}">Leer más...</a>
                                </div>
                            </div>
                    </div>



                    <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/img/airo.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->fecha_publicacion4}}</div>
                                    <h2 class="card-title h4">{{$post->titulo_publicacion4}}</h2>
                                    <p class="card-text">{{$post->contenido_publicacion4}}</p>
                                    <a class="btn btn-primary" href="{{route('post')}}">Leer más...</a>
                                </div>
                            </div>
                    </div>



                    <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/img/monster.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->fecha_publicacion5}}</div>
                                    <h2 class="card-title h4">{{$post->titulo_publicacion5}}</h2>
                                    <p class="card-text">{{$post->contenido_publicacion5}}</p>
                                    <a class="btn btn-primary" href="{{route('post2')}}">Leer más...</a>
                                </div>
                            </div>
                    </div>


                    <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="/img/ygu.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{$post->fecha_publicacion6}}</div>
                                    <h2 class="card-title h4">{{$post->titulo_publicacion6}}</h2>
                                    <p class="card-text">{{$post->contenido_publicacion6}}</p>
                                    <a class="btn btn-primary" href="{{route('post3')}}">Leer más...</a>
                                </div>
                            </div>
                    </div>




                    
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">

                        </ul>
                    </nav>
                </div>
                
                    
                    <div class="card mb-4">
                        <div class="card-header">Categorías</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="{{route('pc')}}">PC</a></li>
                                        <li><a href="{{route('switch')}}">Nintendo Switch</a></li>
                                        <li><a href="{{route('android')}}">Android</a></li>
                                    </ul>
                                </div>

                            

                            </div>
                        </div>
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
