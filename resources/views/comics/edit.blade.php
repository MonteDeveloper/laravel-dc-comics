@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create a Comic</h1>
    <div class="container d-flex flex-column justify-content-center">
        <form action="{{ route('comics.update', $comic->id)}}" method="post">
            @csrf

            @method("PUT")
        
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" value="{{$comic->title}}">

            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description" value="{{$comic->description}}">

            <label for="thumb">Immagine (path)</label>
            <input class="form-control" type="text" name="thumb" value="{{$comic->thumb}}">

            <label for="price">Prezzo</label>
            <input class="form-control" type="text" name="price" value="{{$comic->price}}">

            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series" value="{{$comic->series}}">

            <label for="sale_date">Data</label>
            <input class="form-control" type="text" name="sale_date" value="{{$comic->sale_date}}">

            <label for="type">Tipo</label>
            <input class="form-control" type="text" name="type" value="{{$comic->type}}">

            <label for="artists">Artisti</label>
            <input class="form-control" type="text" name="artists" value="{{$comic->artists}}">

            <label for="writers">Scrittori</label>
            <input class="form-control" type="text" name="writers" value="{{$comic->writers}}">

            <input class="form-control my-3 btn btn-success" type="submit" value="MODIFICA FUMETTO">
        </form>
        <button class="btn btn-primary" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>

</div>
@endsection