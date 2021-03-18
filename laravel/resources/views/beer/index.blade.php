@extends('layouts.app')

@section('title','le birre')

@section('content')
    <h1> Qui di seguito le birre</h1>
    @foreach ($beers as $item)
        <h2>Tipo : {{ $item->tipo }} </h2>
        <ul>
            <li>Colore: {{ $item->colore }}</li>
            <li>Gradazione: {{ $item->gradazione }}</li>
        </ul>
    @endforeach
@endsection