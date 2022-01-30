<?php

use Illuminate\Support\Facades\Route;
use App\Models\publicaciones;
use App\Models\publicaciones2;
use App\Models\publicacion1;
use App\Models\publicacion2;
use App\Models\publicacion3;
use App\Models\publicacion4;
use App\Models\publicacion5;
use App\Models\publicacion6;
use App\Models\titulos_pc;
use App\Models\titulos_switch;

Route::get('/', function () {
    $post= new publicaciones();

    $post->fecha_publicacion="Publicado el 28 de Enero del 2022";
    $post->fecha_publicacion2="Publicado del 28 de Enero del 2022";
    $post->fecha_publicacion3="Publicado del 27 de Enero del 2022";

    $post->titulo_publicacion="El Duende Verde llega a Fortnite";
    $post->titulo_publicacion2="Star Wars The Old Republic";
    $post->titulo_publicacion3="Blackwind";

    $post->contenido_publicacion="El Duende Verde llega a Fornite y no descansara hasta destruir a Spider-Man.";
    $post->contenido_publicacion2="BioWare y Lucas Film Games nos traen un nuevo trailer de de Star Wars: The Old Republic, el cual muestra algunas novedades sobre la historia del juego.";
    $post->contenido_publicacion3="Blackwind: Entra en un mecha y destruye aliens con estilo.";

    return view('blog.index',['post'=>$post]);
})->name('inicio');



Route::get('/indexv2', function () {
    $post= new publicaciones2();

    $post->fecha_publicacion="Publicado el 23 de Enero del 2022";
    $post->fecha_publicacion2="Publicado del 13 de Enero del 2022";
    $post->fecha_publicacion3="Publicado del 12 de Enero del 2022";

    $post->titulo_publicacion="Nueva Imagen de Airoheart";
    $post->titulo_publicacion2="Monster Hunter Rise llega a PC";
    $post->titulo_publicacion3="Yu-Gi-Oh! Duel links celebra su quinto aniversario.";


    $post->contenido_publicacion="Una nueva aventura inspirada en The Leyend Of Zelda";
    $post->contenido_publicacion2="Monster Hunter Rise de Nintento Switch llega a PC hoy.";
    $post->contenido_publicacion3="Konami está de gala celebrando el quinto aniversario de su exitoso juego para moviles.";

    return view('blog.indexv2',['post'=>$post]);
})->name('iniciov2');


Route::get('/post', function () {
    $post= new publicacion1();
    $post->titulo_publicacion="Nueva Imagen de Airoheart";
    $post->fecha_publicacion="Publicado el 23 de Enero del 2022";
    $post->categoria_publicacion1="PC";
    $post->categoria_publicacion2="Nintendo Switch";
    $post->contenido_publicacion="Tras revelar la colaboracion entre SOEDESCO y Pixel Art Studio, se hizo anuncio de la nueva imagen de AiroHeart, una aventura pixel arte inspirada en The Leyend Of Zelda. Este nuevo arte, segun el desarrollador australiano del estudio, es una representacion de la personalidad y las caracteristicas del titulo, asi como una interpretacion del mundo del juego y sus habitantes.";
    $post->contenido_publicacion2="Siendo un juego de plataformas con un combate de los juegos de antaño en tiempo real. El mismo fue creado con el arte de pixeles en 16 bits para apelar a la nostalgia de los jugadores más veteranos.";
    $post->contenido_publicacion3="Se tiene planeada una beta exclusiva para el 24 de febrero para los pratrocinadores y jugadores seleccionados en Kickstarter. El trailer presentado a continuacion muestra el antiguo logotipo del juego.";
    return view('blog.post',['post'=>$post]);
})->name('post');


Route::get('/post2', function () {
    $post= new publicacion2();
    $post->titulo_publicacion="Monster Hunter Rise llega a PC";
    $post->fecha_publicacion="Publicado el 13 de Enero del 2022";
    $post->categoria_publicacion1="PC";
    $post->categoria_publicacion2="Nintendo Switch";
    $post->contenido_publicacion="El galardonado juego Monster Hunter Rise de Nintendo Switch llega a PC el dia de hoy. Acompañado del lanzamiento global por medio de la plataforma Steam. La version de PC ofrece caracteristicas unicas, tales como resolucion 4K, opciones graficas superiores, chat de voz y compatibilidad con monitores ultrawide y mucho más.";
    $post->contenido_publicacion2="Monster Hunter Rise transporta a los jugadores a la colorida Aldea Kamura mientras se prepara para defenderse del inminente frenesí, donde deberás hacer uso de los nuevos compañeros de caza Canyne y de la mecánica de agarre Cordóptero.";
    $post->contenido_publicacion3="La versión para PC de Monster Hunter Rise incluye una amplia selección de monstruos que superar, incluyendo todo contenido hasta la actualización 3.6.1 de Nintendo Switch.
    Estas actualizaciones gratuitas del título añaden varios monstruos adicionales, además de contenido de colaboración con juegos emblemáticos como Okami, Ghosts ‘n Goblins y otros.
    Los futuros contenidos posteriores al lanzamiento se sincronizarán con la versión de Nintendo Switch a finales de febrero de 2022.
    Además, la enorme expansión de pago Monster Hunter Rise: Sunbreak llegará para los jugadores tanto a Nintendo Switch como a PC el tercer trimestre de 2022";
    return view('blog.post2',['post'=>$post]);
    return view('blog.post2');
})->name('post2');



Route::get('/post3', function () {
    $post= new publicacion3();
    $post->titulo_publicacion="Yu-Gi-Oh! Duel links celebra su quinto aniversario.";
    $post->fecha_publicacion="Publicado el 12 de Enero del 2022";
    $post->categoria_publicacion="PC";
    $post->categoria_publicacion2="Android";
    $post->contenido_publicacion="Konami está de manteles largos porque celebra el quinto aniversario de su exitoso juego para PC y dispositivos móviles, Yu-Gi-Oh! DUEL LINKS.";
    $post->contenido_publicacion2="A partir de hoy, KONAMI dará a todos los duelistas que inicien sesión una carta de Monstruo Renacido y una habilidad para conmemorar los miles de millones de duelos jugados en los últimos cinco años.";
    $post->contenido_publicacion3="Al iniciar sesión entre el 12 de enero de 2022 y el 28 de febrero de 2023, los duelistas recibirán la carta Monstruo RenacidoLegend Foil Rarity para convocar a los Monstruos de Invocación Especial del cementerio y potencialmente cambiar el rumbo de cualquier duelo. El Robo de Destino complementario: la habilidad Monstruo Renacido les permite a los duelistas sacar la carta Monstruo Renacido en su próximo sorteo si aún no está en su mano. Juntas, la carta y la habilidad, son una combinación poderosa para cualquier duelista.";
    return view('blog.post3',['post'=>$post]);
})->name('post3');




Route::get('/post4', function () {
    $post= new publicacion4();
    $post->titulo_publicacion="El Duende Verde llega a Fortnite";
    $post->fecha_publicacion="Publicado el 28 de Enero del 2022";
    $post->categoria_publicacion="PC";
    $post->categoria_publicacion2="Switch";
    $post->contenido_publicacion="No descansará hasta haber destruido a Spider-Man. Guiado por el imponente Daily Bugle, el Duende Verde ha seguido a Spider-Man hasta la isla de Fortnite.";
    $post->contenido_publicacion2="El Atuendo “Duende Verde” fue creado a partir de una pesadilla, y los objetos que lo acompañan también. Aquí está todo lo que encontrarán en la Tienda:";
    $post->contenido_publicacion3="Mochila retro “Bomba calabaza” (se vende con el atuendo)";
    $post->contenido_publicacion4="Pico “Picalabaza”";
    $post->contenido_publicacion5="Deslizador “Duende”";
    $post->contenido_publicacion6="Gesto “¡Prepara la calabaza!”";
    $post->contenido_publicacion7="Te dejo el trailer de lanzamiento para que le des un vistazo.";
    
    
    return view('blog.post4',['post'=>$post]);
})->name('post4');




Route::get('/post5', function () {
    $post= new publicacion5();
  
    
    
    $post->titulo_publicacion="Star Wars The Old Republic";
    $post->fecha_publicacion="Publicado el 28 de Enero del 2022";
    $post->categoria_publicacion="PC";
    $post->categoria_publicacion2="Switch";
    $post->contenido_publicacion="BioWare y Lucas Film Games nos traen un nuevo trailer de de Star Wars: The Old Republic, el cual muestra algunas novedades sobre la historia del juego.";
    $post->contenido_publicacion2="Todo aunado a la nueva expansión Legacy of the Sith. En donde los jugadores continuarán sumergiéndose en su propio viaje; desenterrando los misterios detrás del plan definitivo del Sith renegado, Darth Malgus; quien ha sido un peligro para la galaxia desde que fue presentado por primera vez en el icónico MMORPG hace ya 10 años.";
    $post->contenido_publicacion3="Star Wars: The Old Republic – Legacy of the Sith llegará el 15 de febrero; y marcará el comienzo de la celebración por el décimo aniversario del juego; que se extenderá a lo largo de 2022 y brindará a los fanáticos variedad de contenido nuevo, actualizaciones y actividades dentro del mismo.";
    return view('blog.post5',['post'=>$post]);
})->name('post5');


Route::get('/post6', function () {
    $post= new publicacion6();  
    $post->titulo_publicacion="Blackwind";
    $post->fecha_publicacion="Publicado el 27 de Enero del 2022";
    $post->categoria_publicacion="PC";
    $post->categoria_publicacion2="Switch";
    $post->contenido_publicacion="Blackwind, juego de plataformas y acción de ciencia ficción con combates de hack and slash, de Drakkar Dev y la editorial Blowfish Studios, aterriza ya en PlayStation 5, Xbox Series X|S, PlayStation 4, Xbox One, Nintendo Switch, PC y Mac";
    $post->contenido_publicacion2="En Blackwind tomaremos el papel James Hawkins, un adolescente común y corriente sin experiencia militar previa, que realiza un aterrizaje forzoso en una colonia minera del planeta Medusa-42, que alguna vez fue pacífica. James debe abrirse camino a través de las fuerzas de Raknos, encontrar a su padre y salvar lo que queda del planeta.
    Equipado con el prototipo de robot de batalla de su padre y una avanzada I.A., salta y lucha a lo largo de parajes de ciencia ficción, equipando cuchillas de energía, misiles, granadas y más para cortar y tajar a través de hordas de Raknos engendrados.";
    $post->contenido_publicacion3="Te dejo el trailer de lanzamiento para que le des un vistazo.";
    return view('blog.post6',['post'=>$post]);
})->name('post6');

Route::get('/pc', function () {
    $post= new titulos_pc();  
    $post->fecha_publicacion="28 Enero 2022";
    $post->fecha_publicacion2="28 Enero 2022";
    $post->fecha_publicacion3="27 Enero 2022";
    $post->fecha_publicacion4="23 Enero 2022";
    $post->fecha_publicacion5="13 Enero 2022";
    $post->fecha_publicacion6="12 Enero 2022";
    

    $post->titulo_publicacion="El Duende Verde llega a Fortnite";
    $post->titulo_publicacion2="Star Wars The Old Republic";
    $post->titulo_publicacion3="Blackwind";
    $post->titulo_publicacion4="Nueva Imagen de Airoheart";
    $post->titulo_publicacion5="Monster Hunter Rise llega a PC";
    $post->titulo_publicacion6="Yu-Gi-Oh! Duel links celebra su quinto aniversario.";


    $post->contenido_publicacion="El Duende Verde llega a Fornite y no descansara hasta destruir a Spider-Man.";
    $post->contenido_publicacion2="BioWare y Lucas Film Games nos traen un nuevo trailer de de Star Wars: The Old Republic, el cual muestra algunas novedades sobre la historia del juego.";
    $post->contenido_publicacion3="Blackwind: Entra en un mecha y destruye aliens con estilo.";
    $post->contenido_publicacion4="Una nueva aventura inspirada en The Leyend Of Zelda";
    $post->contenido_publicacion5="Monster Hunter Rise de Nintendo Switch llega a PC hoy.";
    $post->contenido_publicacion6="Konami está de gala celebrando el quinto aniversario de su exitoso juego para moviles.";
    return view('blog.pc',['post'=>$post]);

})->name('pc');

Route::get('/switch', function () {
    $post= new titulos_switch();  
    $post->fecha_publicacion="28 Enero 2022";
    $post->fecha_publicacion2="28 Enero 2022";
    $post->fecha_publicacion3="27 Enero 2022";
    $post->fecha_publicacion4="23 Enero 2022";
    $post->fecha_publicacion5="13 Enero 2022";
    $post->fecha_publicacion6="12 Enero 2022";
    

    $post->titulo_publicacion="El Duende Verde llega a Fortnite";
    $post->titulo_publicacion2="Star Wars The Old Republic";
    $post->titulo_publicacion3="Blackwind";
    $post->titulo_publicacion4="Nueva Imagen de Airoheart";
    $post->titulo_publicacion5="Monster Hunter Rise llega a PC";
    $post->titulo_publicacion6="Yu-Gi-Oh! Duel links celebra su quinto aniversario.";


    $post->contenido_publicacion="El Duende Verde llega a Fornite y no descansara hasta destruir a Spider-Man.";
    $post->contenido_publicacion2="BioWare y Lucas Film Games nos traen un nuevo trailer de de Star Wars: The Old Republic, el cual muestra algunas novedades sobre la historia del juego.";
    $post->contenido_publicacion3="Blackwind: Entra en un mecha y destruye aliens con estilo.";
    $post->contenido_publicacion4="Una nueva aventura inspirada en The Leyend Of Zelda";
    $post->contenido_publicacion5="Monster Hunter Rise de Nintendo Switch llega a PC hoy.";
    $post->contenido_publicacion6="Konami está de gala celebrando el quinto aniversario de su exitoso juego para moviles.";
    return view('blog.switch',['post'=>$post]);

})->name('switch');

Route::get('/android', function () {
    return view('blog.android');
})->name('android');

