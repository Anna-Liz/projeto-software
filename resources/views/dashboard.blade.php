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
                    <a href="/cadastre-seu-livrinho">Cadastrar</a>
                    <table>
                        <tr >
                            <th style="padding: 0px 30px">Autor</th>
                            <th style="padding: 0px 30px">Titulo</th>
                            <th style="padding: 0px 30px">Subtitulo</th>
                            <th style="padding: 0px 30px">Edição</th>
                            <th style="padding: 0px 30px">Editora</th>
                            <th style="padding: 0px 30px">Ano de Publicação</th>
                        </tr>


                    @foreach ($livrinhos as $livrinho)
                        <tr>
                            <td style="padding: 0px 30px">{{$livrinho->autor}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->titulo}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->subtitulo}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->edicao}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->editora}}</td>
                            <td style="padding: 0px 30px">{{$livrinho->ano}}</td>
                            <td style="padding: 0px 30px">
                                <a href="/edite-seu-livrinho/{{$livrinho->id}}">Editar</a>
                                <a href="/delete-seu-livrinho/{{$livrinho->id}}">Deletar</a>
                            </td>

                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
