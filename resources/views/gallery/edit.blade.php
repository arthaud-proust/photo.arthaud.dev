@extends('layouts.app')

@section('title', $gallery? "Editer ".$gallery->name : "Gallerie introuvable")


@section('view')

<main class="container">
    @include('components.alert')
    <form class="needs-validation mt-5" novalidate action="/gallery/{{ $gallery->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <h1 class="mb-4">Editer la gallerie {{ $gallery->name }}</h1>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="img">Vignette</label>
                <input type="file" class="form-control-file {{$errors->first('img') ? 'is-invalid':''}}" name="img" id="img">
                <div class="invalid-feedback">
                    {{$errors->first('img')}}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control {{$errors->first('name') ? 'is-invalid':''}}" id="name" name="name" placeholder="ex: Portrait d'Ombres" value="{{ $gallery->name }}" required>
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control {{$errors->first('slug') ? 'is-invalid':''}}" name="slug" placeholder="ex: portrait-dombres" value="{{ $gallery->slug }}" disabled required>
                <div class="invalid-feedback">
                    {{$errors->first('slug')}}
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="text">Texte (optionnel)</label>
            <textarea class="form-control" id="text" name="text" rows="3">{{ $gallery->text }}</textarea>
        </div>
        <button class="btn btn-success" type="submit">Enregistrer</button>
        <a class="btn btn-link-dark" href="/">Annuler</a>
    </form>
    <form action="/gallery/{{ $gallery->slug }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger float-right" type="submit">Supprimer (irréversible)</button>
        </form>
</main>
<script src="/js/admin.js" defer></script>


@endsection
