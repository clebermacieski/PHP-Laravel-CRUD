@extends('layouts.app')

@section('titulo-pagina')
<h1>Editar Cliente</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12"></div>
        <form method="POST" enctype="multipart/form-data" action="{{ route('clients.update', $client->id) }}">
            {{ method_field('PUT')}}

            {{ csrf_field() }}

            @include('clients.form')
        </form>

    <a href="{{ route('clients.index') }}">Voltar para a lista de clientes</a>
</div>
</div>
@endsection