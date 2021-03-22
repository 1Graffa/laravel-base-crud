@extends('layouts.app')

@section('title','le birre')

@section('content')
    <h1> La nostra Birra {{ $birra->name }} nel dettaglio</h1>
        <h2>Nome : {{ $birra->name }} </h2>
        <ul>
            <li>#: {{ $birra->id }}</li>
            <li>Stile: {{ $birra->type }}</li>
            <li>Colore: {{ $birra->color }}</li>
            <li>Gradazione: {{ $birra->volume }}</li>
            <li>Descrizione: {{ $birra->description }}</li>
            <li><a href="{{ route('birre.show', ['birre' => $birra->id]) }}">dettagli</a></li>
            <hr style="border-color:blue;margin-left:-30px">
        </ul>
        <h3><a href="{{ route('birre.index') }}"><button class="btn btn-secondary">Torna all'elenco</button></a></h3>
@endsection