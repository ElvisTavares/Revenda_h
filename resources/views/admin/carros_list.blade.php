@extends('adminlte::page')

@section('title', 'Cadastro de Carros')

@section('content_header')
    <h1>Cadastro de Carros
        <a href="{{ route('carros.create') }}"
           class="btn btn-primary pull-right" role="button">Novo</a>
    </h1>
@endsection

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th> Modelo </th>
            <th> Marca </th>
            <th> Cor </th>
            <th> Ano </th>
            <th> Preço R$ </th>
            <th> Combustível </th>
            <th> Data Cad. </th>
            <th> * </th>
            <th> Foto </th>
            <th> Ações </th>
        </tr>
        @forelse($carros as $c)
            <tr>
                <td> {{$c->modelo}} </td>
                <td> {{$c->marca_nome}} </td>
                <td> {{$c->cor}} </td>
                <td> {{$c->ano}} </td>
                <td> {{number_format($c->preco, 2, ',', '.')}} </td>
                <td> {{$c->combustivel}} </td>
                <td> {{date_format($c->created_at, 'd/m/Y')}} </td>
                <td> {{$c->destaque}} </td>


            </tr>

        @empty

        @endforelse
    </table>



@endsection

@section('js')
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
@endsection