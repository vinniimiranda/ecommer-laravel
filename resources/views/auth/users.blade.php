@extends('layouts.app')
@extends('layouts.cabecalho')
@section('content')

<div class='card-panel'>
    <div class="row">
        <h5 class="center-align">Lista de Usuários</h5>
    </div>

    <div class="row">
        <table id='tabela' class='highlight centered'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuário</th>
                    <th>Email</th>
                    <th>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Teste1</td>
                    <td>teste1@teste.com.br</td>
                    <td>22/09/2018</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Teste2</td>
                    <td>teste2@teste.com.br</td>
                    <td>22/09/2018</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Teste3</td>
                    <td>teste3@teste.com.br</td>
                    <td>22/09/2018</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
