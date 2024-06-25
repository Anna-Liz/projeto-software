<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    public function create(Request $request){
        $request->validate([
            "autor" =>"required|string",
            "titulo" =>"required|string",
            "subtitulo" =>"required|string",
            "edicao" =>"required|string",
            "editora" =>"required|string",
            "ano" =>"required|max:2024"
        ]);

        $li = new Livro();
        $li->create([
            'id_usuario' => Auth::id(),
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'edicao' => $request->edicao,
            'editora' => $request->editora,
            'ano' => $request->ano
        ]);
        return redirect("/dashboard");
    }
    public function delete($id){
        Livro::where('id', $id)->first()->delete();
        return redirect("/dashboard");
    }
    public function edit(Request $request, $id){
        $request->validate([
            "autor" =>"required|string",
            "titulo" =>"required|string",
            "subtitulo" =>"required|string",
            "edicao" =>"required|string",
            "editora" =>"required|string",
            "ano" =>"required|max:2024"
        ]);

        Livro::where('id', $id)->first()->update([
            'id_usuario' => Auth::id(),
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'edicao' => $request->edicao,
            'editora' => $request->editora,
            'ano' => $request->ano
        ]);
        return redirect("/dashboard");

    }
}
