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
                    <p class="lead mb-0">Esta es una pagina dedicada a las noticias sobre videojuegos.</p>
                </div>
            </div>
        </header>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://i.ibb.co/ch9xHqw/airo.png" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">Enero 23 2022</div>
                            <h2 class="card-title">Nueva Imagen de AiroHeart</h2>
                            <p class="card-text">Una nueva aventura inspirada en The Leyend Of Zelda</p>
                            <a class="btn btn-primary" href="{{route('post')}}">Leer más...</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://i.ibb.co/9y0dcFb/monster.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">13 Enero 2022</div>
                                    <h2 class="card-title h4">Monster Hunter Rise: De Portatil a PC</h2>
                                    <p class="card-text">Monster Hunter Rise de Nintento Switch llega a PC hoy.</p>
                                    <a class="btn btn-primary" href="{{route('post2')}}">Leer más...</a>
                                </div>
                            </div>
                        
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="https://i.ibb.co/q9cGgzV/anive.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">12 Enero 2022</div>
                                    <h2 class="card-title h4">Yu-Gi-Oh! Duel links celebra su quinto aniversario.</h2>
                                    <p class="card-text">Konami está de gala celebrando el quinto aniversario de su exitoso juego para moviles.</p>
                                    <a class="btn btn-primary" href="{{route('post3')}}">Leer más...</a>
                                </div>
                            </div>
                    </div>

                    
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Recientes</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!" aria-disabled="true">Viejas</a></li>
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
