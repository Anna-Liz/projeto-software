<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/edite-seu-livrinho/{{$livrinho->id}}" method="post">
    @csrf
    <div class="box">
		<h1>Editar livro {{$livrinho->titulo}}:</h1>

		<label>
			<span>Autor</span>
 			<input value="{{$livrinho->autor}}" type="text" class="input_text" name="autor"/>
		</label>

		<label>
 			<span>Título</span>
			<input value="{{$livrinho->titulo}}" type="text" class="input_text" name="titulo"/>
		 </label>

		<label>
 			<span>Subtitulo</span>
			<input value="{{$livrinho->subtitulo}}" type="text" class="input_text" name="subtitulo"/>
		</label>

        <label>
			<span>Edição</span>
 			<input value="{{$livrinho->edicao}}" type="text" class="input_text" name="edicao"/>
		</label>

		<label>
 			<span>Editora</span>
			<input value="{{$livrinho->editora}}" type="text" class="input_text" name="editora"/>
		 </label>

		<label>
 			<span>Ano de Publicação</span>
			<input value="{{$livrinho->ano}}" type="text" class="input_text" name="ano"/>
		</label>
	</div>
    <input type="submit" value="Editar">
</form>

</body>
</html>
