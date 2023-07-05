@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create a Comic</h1>
    <div class="container d-flex flex-column justify-content-center">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
        
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title">

            <label for="description">Descrizione</label>
            <input class="form-control" type="text" name="description">

            <label for="thumb">Immagine (path)</label>
            <input class="form-control" type="text" name="thumb">

            <label for="price">Prezzo</label>
            <input class="form-control" type="text" name="price">

            <label for="series">Serie</label>
            <input class="form-control" type="text" name="series">

            <label for="sale_date">Data</label>
            <input class="form-control" type="text" name="sale_date">

            <label for="type">Tipo</label>
            <input class="form-control" type="text" name="type">

            <label for="artists">Artisti</label>
            <input class="form-control" type="text" name="artists">

            <label for="writers">Scrittori</label>
            <input class="form-control" type="text" name="writers">

            <input class="form-control mt-4 btn btn-success" type="submit" value="AGGIUNGI FUMETTO">
        </form>
        <button class="btn btn-primary m-3" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>

</div>
@endsection