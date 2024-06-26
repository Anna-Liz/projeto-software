<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color:rgb(187, 114, 187);">
                    <a href="/cadastre-seu-livrinho" style="padding: 8px; margin-bottom: 8px; background-color:aliceblue; border-radius: 4px; color: black;">Cadastrar</a>
                    <table>
                        <tr >
                            <th style="padding: 15px 30px 0px">Autor</th>
                            <th style="padding: 10px 30px 0px">Titulo</th>
                            <th style="padding: 10px 30px 0px">Subtitulo</th>
                            <th style="padding: 10px 30px 0px">Edição</th>
                            <th style="padding: 10px 30px 0px">Editora</th>
                            <th style="padding: 10px 30px 0px">Ano de Publicação</th>
                        </tr>


                    @foreach ($livrinhos as $livrinho)
                        <tr>
                            <td style="padding: 7px 30px">{{$livrinho->autor}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->titulo}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->subtitulo}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->edicao}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->editora}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->ano}}</td>
                            <td style="padding: 0px 30px">
                                <a href="/edite-seu-livrinho/{{$livrinho->id}}" style="padding: 8px; margin-right: 5px; background-color:aliceblue; border-radius: 4px; color: black; ">Editar</a>
                                <a href="/delete-seu-livrinho/{{$livrinho->id}}" style="padding: 8px; background-color:aliceblue; border-radius: 4px; color: black;">Deletar</a>
                            </td>

                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
