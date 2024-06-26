<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0px;
        }
        header{
            margin-top: 50px;
            font-size: 30px;
            text-align: center;
            background-color: rgb(183, 104, 207);
            border-radius: 10px;
            width: 50%;
            height: 10vh;
            font-weight: bold;
        }
        body{
            background-color: rgb(39, 35, 35);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .box{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            width: 50vw;
            background-color: rgb(239, 163, 244);
            border-radius: 10px;
            gap: 15px;
        }
        label{
            font-size: 20px;
        }
        input{
            border-radius: 4px;
            border: none;
            height: 20px;
        }
        #butao{
            border-radius: 4px;
            border: none;
            width: 20%;
            height: 8%;
            background-color: rgb(183, 104, 207);
            font-size: large;
        }
        a{
            padding: 12px;
            background-color: white;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>
<a href="/dashboard">Voltar</a>
<header>Editar livro:  {{$livrinho->titulo}}:</header>
<form action="/edite-seu-livrinho/{{$livrinho->id}}" method="post">
    @csrf
    <div class="box">

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
