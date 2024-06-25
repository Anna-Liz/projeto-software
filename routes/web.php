<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $li = Livro::where("id_usuario", Auth::id())->paginate(100);
    return view('dashboard', ['livrinhos' => $li]);
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cadastre-seu-livrinho', function(){
        return view("cadastrar");
    });
    Route::get('/delete-seu-livrinho/{id}', [LivroController::class, 'delete']);
    Route::get('/edite-seu-livrinho/{id}',function($id){
        $livrinho = Livro::where('id', $id)->first();
        return view("editar", ["livrinho" => $livrinho]);
    });

    Route::post('/cadastre-seu-livrinho', [LivroController::class, 'create']);
    Route::post('/edite-seu-livrinho/{id}', [LivroController::class, 'edit']);
});

require __DIR__.'/auth.php';
