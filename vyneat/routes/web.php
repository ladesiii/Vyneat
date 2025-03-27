<?php

use App\Clases\Cicle;
use App\Clases\Curs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    
    $nombre = 'Jeancarlos';
    $apellidos = 'Felix Guevara';

    return view('carpeta.saludo', compact('nombre', 'apellidos'));
})->name('saludo');


Route::get('/prova', function(){
    return "Això és una prova";
});

Route::get('/suma/{num1}/{num2}', function($num1, $num2){
    $num1 = 5;
    $num2 = 6;
    $suma = $num1 + $num2;
    return $suma;
});

Route::get('/cicles', function(){
    $cicles = new Cicle(1,'DAW', 'Desenvolupament Aplicacions Web');
    $cicles1 = new Cicle(2,'DAM', 'Desenvolupament Aplicacions Multiplataforma');

    $materias = array($cicles, $cicles1);

    return view('cicles.index', compact('materias'));
});

Route::get('/cursos', function(){
    $cursos = new Curs(1,'DAW1A', 'Desenvolupament Aplicacions Web de primer matí A', 'DAW');
    $cursos1 = new Curs(2, 'DAW2A', 'Desenvolupament Aplicacions Web de segon matí A', 'DAW');
    $cursos2 = new Curs(3, 'DAW2B', 'Desenvolupament Aplicacions Web de segon matí B', 'DAW');

    $materias = array($cursos, $cursos1, $cursos2);

    return view('cursos.index', compact('materias'));
});

Route::get('/', function() {
    return view('index');
});
