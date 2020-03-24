@extends('layouts.app')

@section('title', "Nouvelle galerie")


@section('view')

<main class="container">
    @include('components.alert')
    <form class="needs-validation mt-5" novalidate action="/gallery" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="img">Vignette</label>
                <input type="file" class="form-control-file {{$errors->first('img') ? 'is-invalid':''}}" name="img" id="img" required>
                <div class="invalid-feedback">
                    {{$errors->first('slug')}}
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control {{$errors->first('name') ? 'is-invalid':''}}" id="name" name="name" placeholder="ex: Portrait d'Ombres" value="{{ old('name') }}" required>
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control {{$errors->first('slug') ? 'is-invalid':''}}" id="slug" name="slug" placeholder="ex: portrait-dombres" value="{{ old('slug') }}" required>
                <div class="invalid-feedback">
                    {{$errors->first('slug')}}
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="text">Texte (optionnel)</label>
            <textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Créer</button>
        <a class="btn btn-link-dark" href="/">Annuler</a>
    </form>
</main>
<script src="/js/admin.js" defer></script>


@endsection
