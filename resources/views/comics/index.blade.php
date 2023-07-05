@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="container">
        <h1 class="text-center">Comics</h1>
        <button class="btn btn-primary mx-3" onclick="window.location = '{{ route('comics.create')}}'">AGGIUNGI UN FUMETTO</button>
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
            <div class="p-3 col-3">
                <div class="card my-card h-100" onclick="window.location = '{{ route('comics.show', $comic->id) }}'">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="comicImg">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title text-center">{{$comic->title}}</h5>
                    </div>
                </div>    
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection