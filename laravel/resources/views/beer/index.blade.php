@extends('layouts.app')

@section('title','le birre')

@section('content')
    <h1> Qui di seguito le birre</h1>
    <a href="{{ route('birre.create') }}"><button class="btn btn-light">Inserisci una nuova birra</button></a>
    @foreach ($beers as $birra)
        <h2>Nome : {{ $birra->name }} </h2>
        <ul>
            <li>Colore: {{ $birra->color }}</>
            <li>Gradazione: {{ $birra->volume }}</li>
            <li><a href="{{ route('birre.show', ['birre' => $birra->id]) }}">dettagli</a></li>
            <hr style="border-color:blue;margin-left:-30px">
        </ul>
    @endforeach
@endsection