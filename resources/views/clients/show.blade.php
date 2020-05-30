@extends('layouts.app')

@section('titulo-pagina')
<h1>Detalhes do Clientes</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12"></div>
        <p>Id: {{ $client->id }}</p>
        <p>Nome: {{ $client->name }}</p>
        <p>E-mail: {{ $client->email }}</p>
        <p>Idade: {{ $client->age }}</p>
        <p>Foto do Cliente: </p>
    <img src="{{ asset('storage/' . Str::after( $client->photo, 'public/' )) }}" alt="600" width="300">

    <br>

    <a href="{{ route('clients.index') }}">Voltar para a lista de clientes</a>
    </div>
</div>
@endsection