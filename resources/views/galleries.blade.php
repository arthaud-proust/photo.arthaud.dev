@extends('layouts.app')

@section('title', "Galleries")
@section('header', "")

@section('view')
    <main class="container pt-5">
        @include('components.alert')
        <h1 class="title">Galleries</h1>
        @if (Auth::check())
        <a href="/gallery/create" class="btn btn-primary">Créer</a>
        <form class="navbar-text" action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-link" href="/">Se déconnecter</button>
        </form>
        @endif
        <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-sm-4 mt-4">
                <article class="card xs m-2 gallery">
                    <!-- <img class="card-img-top" src="/res/blank.png" data-src="{{ $gallery->preview }}" alt="Card image cap"> -->
                    <img class="card-img-top" src="{{ $gallery->preview }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/{{$gallery->slug}}" class="text-dark">{{$gallery->name}}</a></h5>
                        <a href="/{{$gallery->slug}}" class="card-link">Regarder</a>
                        @if (Auth::check())
                        <a href="/gallery/{{$gallery->slug}}/edit" class="card-link text-success">Editer</a>
                        @endif
                    </div>
                </article>
            </div>
        @endforeach
        </div>
    </main>
@endsection