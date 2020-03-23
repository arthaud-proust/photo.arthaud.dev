@extends('layouts.app')

@section('title', "Erreur 404")
@section('style', "error")


@section('header', '')

@section('view')

<main class="container-fluid pt-5 px-0 rounded-0 text-center">
    <div class="jumbotron mt-5">
        <h1 class="display-1">404</h1>
        @if ($exception->getMessage() == "gallery")
        <p class="display-5">La gallerie que vous cherchez n'existe pas... bientôt peut-être? </p>
        @else
        <p class="display-5">La photo que vous cherchez n'existe pas... bientôt peut-être?</p>
        @endif
        <hr class="my-4" width="100px">
        <p class="lead">@include('include.contact')</p>
        
    </div>
        <p class="lead">
            <a href="/" class="py-2 px-4 btn btn-outline-primary">Retourner voir les Galleries existantes</a>
        </p>
</main>
@endsection

