<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PermissoesController;

    Route::get('/',[ConfigController::class, 'index']);

    Route::get('/info',[InfoController::class, 'info']);
    
    Route::get('/permissoes',[PermissoesController::class, 'permissoes']);

Route::fallback(function() {
    return view('404');
});


//Route::view('/', '/welcome');
//Route::view('/teste', 'teste');


//  Route::prefix('/config')->group(function() {
//      Route::get('/',[ConfigController::class, 'index']);
//      Route::get('/info',[ConfigController::class, 'index']);
//      Route::get('/permissoes',[ConfigController::class, 'index']);
//  });



// Route::get('/config', function() {
//    // $link = route('info');

//     //echo "LINK: ".$link;

//     return redirect()->route('permissoes');

//     return view('config');
// });

// Route::get('/config/info', function() {
//     echo "Configurações INFO";
// })->name('info');

// Route::get('/config/permissoes', function() {
//     echo "Configurações PERMISSÕES";
// })->name('permissoes');



//  Route::get('/', function () {
//      return view('welcome');
//  });
// Route::view('/', 'welcome');

//   Route::get('/teste', function() {
//       //return view('teste');
//       echo 'Básico testado!';
//   });

//  Route::redirect('/', '/teste');
//  Route::view('/teste', 'teste');

//  Route::get('noticias/{slug}', function($slug) {
//      echo "Slug: ".$slug;
// });  

// Route::get('/noticia/{slug}/comentario/{id}', function($slug, $id) {
//     echo "Monstrando o comentário ".$id." da notícia ".$slug;
// });

// Route::get('/user/{name}', function($name) {
//     echo "Mostrando usuário de NOME ".$name;
// })->where('name', '[a-z]+');

// Route::get('/user/{id}', function($id) {
//    *    vb 0i9…∑;.9;       v/g/h hm nk 02h echo "Mostrando usuário de ID ".$id;
// })*;//->where('id', '[0-9 ]+');


