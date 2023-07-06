@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create a Comic</h1>
    <div class="container d-flex flex-column justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic->id)}}" method="post">
            @csrf

            @method("PUT")
        
            <label for="title">Titolo</label>
            <input class="form-control @error('title') is-invalid @enderror"" type="text" name="title" value="{{old("title") ?? $comic->title}}">
            @error("title")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label>description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ old("description") ?? $comic->description }}</textarea>
            @error("description")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="thumb">Immagine (path)</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{old("thumb") ?? $comic->thumb}}">
            @error("thumb")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="price">Prezzo</label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" step="0.01" name="price" value="{{old("price") ?? $comic->price}}">
            @error("price")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="series">Serie</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{old("series") ?? $comic->series}}">
            @error("series")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="sale_date">Data</label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" value="{{old("sale_date") ?? $comic->sale_date}}">
            @error("sale_date")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="type">Tipo</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{old("type") ?? $comic->type}}">
            @error("type")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="artists">Artisti</label>
            <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" value="{{old("artists") ?? $comic->artists}}">
            @error("artists")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <label for="writers">Scrittori</label>
            <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{old("writers") ?? $comic->writers}}">
            @error("writers")
                <div class="invalid-feedback">{{$message}}</div>
            @enderror

            <input class="form-control my-3 btn btn-success" type="submit" value="MODIFICA FUMETTO">
        </form>
        <button class="btn btn-primary" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>

</div>
@endsection