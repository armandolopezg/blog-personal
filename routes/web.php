<?php

use Illuminate\Support\Facades\Route;
use App\Models\publicacion1;
use App\Models\publicacion2;
use App\Models\publicacion3;


Route::get('/', function () {
    return view('blog.index');
})->name('inicio');

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


Route::get('/pc', function () {
    return view('blog.pc');
})->name('pc');

Route::get('/switch', function () {
    return view('blog.switch');
})->name('switch');

Route::get('/android', function () {
    return view('blog.android');
})->name('android');

