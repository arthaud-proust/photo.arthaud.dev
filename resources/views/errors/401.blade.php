@extends('layouts.app')

@section('title', "Accès interdit")
@section('style', "error")


@section('header', '')

@section('view')

<main class="container-fluid pt-5 px-0 rounded-0 text-center">
    <div class="jumbotron mt-5">
        <h1 class="display-1">401</h1>
        <p class="display-5">Vous n'êtes pas autorisé à aller sur cette page !</p>
        <hr class="my-4" width="100px">
        <p class="lead">
            Allez plutôt voir les <a href="/" class="ml-2 btn btn-outline-primary">Galleries</a>
        </p>
    </div>
</main>
@endsection

