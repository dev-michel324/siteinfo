<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SolicitacaoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});







// painel de controle para qualquer usuário

Route::resource('/user', UserController::class);

// Route::get('/dashboard', function () {
//     return view('usuarios.dashboard');
// })->middleware(['auth']);

// Route::get('/meusposts', function () {
//     return view('meus-posts');
// });

// painel de controle usuário admin

Route::post('/admin/solicitacoes', [SolicitacaoController::class, 'store'])->name('solicitacaos.store');

Route::get('/admin/solicitacoes', [SolicitacaoController::class, 'index'])->name('solicitacoes.usuarios');

Route::get('/admin/cadastrados', [AdminController::class, 'cadastrados'])->name('users.cadastrados');

Route::resource('/admin', AdminController::class);

// Route::get('/admin', function () {
//     return view('usuarios.admin.admin');
// })->middleware(['auth']);

// Route::get('/publicados', function () {
//     return view('posts.post-publicado');
// });

// Route::get('/verpost', function () {
//     return view('posts.ver-post');
// });


//Route::get('/login',[UsersController::class,'login'])->name('login');
//Route::get('/register',[UsersController::class,'register'])->name('register');
//Route::post('/store', [UsersController::class,'store'])->name('store');

require __DIR__ . '/auth.php';