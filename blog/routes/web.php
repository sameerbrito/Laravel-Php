<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta Home
Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    //Ruta Curso Index
    Route::get('cursos', 'index');
    //Ruta Curso Create
    Route::get('cursos/create', 'create');
    //Ruta Curso Show
    Route::get('cursos/{curso}', 'show');
});


 
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso $curso";
//     }
// });