@extends('layouts.app')

@section('title', $gallery? $gallery->name: "Introuvable")


@section('view')

<main class="container">
    @include('components.alert')
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb mt-5 mb-4">
            <li class="breadcrumb-item"><a href="/">Galleries</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $gallery->name }}</li>
        </ol>
    </nav>
    @if($gallery->text or Auth::check())
    <div class="jumbotron">
        <h1 class="display-4">{{ $gallery->name }}</h1>
        <hr class="my-4">
        <p>{{ $gallery->text }}</p>
        <p class="lead">
            @if (Auth::check())
                <a href="/gallery/{{ $gallery->slug }}/edit"><button class="btn btn-success mt-2">Editer</button></a>
                <a href="{{ route('photo.create', ['gallery'=>$gallery->name]) }}"><button class="btn btn-dark mt-2">Ajouter une photo</button></a>
            @endif
        </p>
    </div>
    @endif

    

    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-sm-4 py-3">
            <article class="card xs">
                <a href="/photo/{{$photo->slug}}" class="card-link">
                    <!-- <img class="card-img-top" src="/res/blank.png" data-src="{{$photo->src}}" alt="Card image cap"> -->
                    <img class="card-img-top" src="{{$photo->src}}" alt="Card image cap">
                </a>
                <div class="card-body">
                    @if($photo->name)<h5 class="card-title"><a href="/{{$gallery->slug}}" class="text-dark">{{$photo->name}}</a></h5>@endif
                    @if($photo->text)<p class="card-text">{{$photo->text}}</p>@endif
                    <a href="/photo/{{$photo->slug}}" class="card-link">Voir plus</a>
                    @if(Auth::check())<a href="/photo/{{$photo->slug}}/edit" class="card-link text-success">Editer</a>@endif
                </div>
            </article>
        </div>
        @endforeach
    </div>

    @if( !$gallery->text && count($photos) == 0)
    <div class="jumbotron">
        <h1 class="display-4">C'est vide ici !</h1>
        <hr class="my-4">
        <p class="lead">Je rajouterai bientôt des photos, c'est promis. @include('include.contact')</p>
        <p class="lead float-right">
            <a class="btn btn-primary mt-2" href="/" role="button">Retourner voir les autres galleries</a>
        </p>
    </div>
    @endif
</main>

@endsection
