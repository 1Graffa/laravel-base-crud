@extends('layouts.app')

@section('title','inserisci la tua birra')

@section('content')
    <h1> inserisci la tua birra</h1>
    <!-- /resources/views/post/create.blade.php -->

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Create Post Form -->
    <div class="container">
        <form method="post" action="{{ route('birre.store') }}">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="inputBirra">Nome birra</label>
                <input type="text" class="form-control" name="name" id="inputBirra">
            </div>
            <div class="form-group">
                <label for="inputStyle">Stile Birra</label>
                <input type="text" class="form-control" name="type" id="inputStyle">
            </div>
            <div class="form-group">
                <label for="inputColor">Colore</label>
                <input type="text" class="form-control" name="color" id="inputColor">
            </div>
            <div class="form-group">
                <label for="inputVolume">Volume</label>
                <input type="text" class="form-control" name="volume" id="inputVolume">
            </div>
            <div class="form-group">
                <label for="inputDescription">Descrizione</label>
                <textarea class="form-control" name="description" id="inputDescription" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection