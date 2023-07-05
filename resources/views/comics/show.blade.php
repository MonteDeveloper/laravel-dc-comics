@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Comic Info</h1>
    <div class="container d-flex flex-column justify-content-center">
        <div class="card w-100">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="comicImg">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text"><strong>Descrizione: </strong>{{$comic->description}}</p>
                        <p class="card-text"><strong>Artisti: </strong><small class="text-muted">{{$comic->artists}}</small></p>
                        <p class="card-text"><strong>Scrittori: </strong><small class="text-muted">{{$comic->writers}}</small></p>
                        <p class="card-text"><strong>Prezzo: </strong>${{$comic->price}}</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-success my-3" onclick="window.location = '{{ route('comics.edit', $comic->id)}}'">MODIFICA FUMETTO</button>

        <form action="{{ route('comics.destroy', $comic->id)}}" method="post">
            @csrf

            @method("DELETE")

            <input class="form-control mb-3 btn btn-danger" type="submit" value="ELIMINA FUMETTO">
        </form>

        <button class="btn btn-primary" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>

</div>
@endsection