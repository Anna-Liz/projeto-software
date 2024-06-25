<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro legal</title>

    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0px;
        }
        header{
            margin-top: 50px;
            font-size: 50px;
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
            width: 10%;
            height: 30%;
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
<header>Cadastrar Livro:</header>
<form action="/cadastre-seu-livrinho" method="post">
    @csrf
    <div class="box">

		<label>
			<span>Autor</span>
 			<input type="text" class="input_text" name="autor"/>
		</label>

		<label>
 			<span>Título</span>
			<input type="text" class="input_text" name="titulo"/>
		 </label>

		<label>
 			<span>Subtitulo</span>
			<input type="text" class="input_text" name="subtitulo"/>
		</label>

        <label>
			<span>Edição</span>
 			<input type="text" class="input_text" name="edicao"/>
		</label>

		<label>
 			<span>Editora</span>
			<input type="text" class="input_text" name="editora"/>
		 </label>

		<label>
 			<span>Ano de Publicação</span>
			<input type="number" class="input_text" max="2024" name="ano"/>
		</label>
        <input type="submit" value="Cadastrar" id="butao">
	</div>
</form>

</body>
</html>
