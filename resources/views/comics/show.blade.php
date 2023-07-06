@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="px-3">Informazioni sul fumetto:</h1>
        <button class="btn btn-danger" onclick="window.location = '{{ route('home')}}'">TORNA ALLA HOMEPAGE</button>
    </div>
    <hr>
    <div class="container d-flex flex-column justify-content-center">
        <div class="card my-showCard w-100 text-white bg-dark overflow-hidden">
            <div class="row g-0 h-100">
                <div class="col-md-4">
                    <img src="{{$comic->thumb ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png'}}" alt="comicImg">
                </div>
                <div class="col-md-8">
                    <div class="card-body h-100">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <h5 class="card-title h3 text-center my-bgLightDark p-3 rounded">{{$comic->title}}</h5>
                            <div class="p-3">
                                @if ($comic->description)
                                    <h5 class="text-danger">Descrizione:</h5>
                                    <p class="card-text">{{$comic->description}}</p>
                                @endif
                                @if ($comic->series)
                                    <h5 class="text-danger">Serie:</h5>
                                    <p class="card-text">{{$comic->series}}</p>
                                @endif
                                @if ($comic->type)
                                <h5 class="text-danger">Tipologia fumetto:</h5>
                                    <p class="card-text">{{$comic->type}}</p>
                                @endif
                                @if ($comic->artists)
                                    <h5 class="text-danger">Artisti:</h5>
                                    <p class="card-text">{{$comic->artists}}</p>
                                @endif
                                @if ($comic->writers)
                                    <h5 class="text-danger">Scrittori:</h5>
                                    <p class="card-text">{{$comic->writers}}</p>
                                @endif
                            </div>
                            <div>
                                @if ($comic->price)
                                    <p class="card-text h3 text-center my-bgLightDark p-3 rounded">${{$comic->price}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center w-100 gap-3 mt-3">
            <form action="{{ route('comics.destroy', $comic->id)}}" method="post">
                @csrf
    
                @method("DELETE")
    
                <input class="form-control btn btn-outline-danger" type="submit" value="ELIMINA FUMETTO">
            </form>
            <button class="btn btn-danger" onclick="window.location = '{{ route('comics.edit', $comic->id)}}'">MODIFICA FUMETTO</button>
        </div>
    </div>

</div>
@endsection