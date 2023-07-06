@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="px-3">Crea un nuovo fumetto:</h1>
        <button class="btn btn-danger" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>
    <hr>
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
        <form class="d-flex flex-column gap-3" action="{{ route('comics.store') }}" method="post">
            @csrf

            <div>
                <label for="title">Titolo:</label>
                <input class="form-control @error('title') is-invalid @enderror"" type="text" name="title" value="{{old("title")}}">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label>Descrizione:</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ old("description")}}</textarea>
                @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="thumb">Immagine:</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{old("thumb")}}">
                @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="price">Prezzo:</label>
                <input class="form-control @error('price') is-invalid @enderror" type="number" step="0.01" name="price" value="{{old("price")}}">
                @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="series">Serie:</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{old("series")}}">
                @error("series")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="sale_date">Data:</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date" value="{{old("sale_date")}}">
                @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="type">Tipo:</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{old("type")}}">
                @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="artists">Artisti:</label>
                <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" value="{{old("artists")}}">
                @error("artists")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <label for="writers">Scrittori:</label>
                <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{old("writers")}}">
                @error("writers")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <input class="form-control mt-4 btn btn-danger" type="submit" value="AGGIUNGI FUMETTO">
        </form>
    </div>

</div>
@endsection