@extends('layouts.app')

@section('title','le birre')

@section('content')
    <h1> Qui di seguito le birre</h1>
    <a href="{{ route('birre.create') }}">Inserisci una nuova birra</a>
    @foreach ($beers as $birra)
        <h2>Tipo : {{ $birra->tipo }} </h2>
        <ul>
            <li>#: {{ $birra->id }}</li>
            <li>Colore: {{ $birra->colore }}</li>
            <li>Gradazione: {{ $birra->gradazione }}</li>
            <li><a href="{{ route('birre.show', ['birre' => $birra->id]) }}">dettagli</a></li>
            <hr style="border-color:blue;margin-left:-30px">
        </ul>
    @endforeach
@endsection