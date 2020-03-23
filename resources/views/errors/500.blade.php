@extends('layouts.app')

@section('title', "Erreur 500")
@section('style', "error")


@section('header', '')

@section('view')

<main class="container-fluid pt-5 px-0 rounded-0 text-center">
    <div class="jumbotron mt-5">
        <h1 class="display-1">500</h1>
        <p class="display-5">Petit problème serveur... J'y travaille !</p>
        <hr class="my-4" width="100px">
        <p class="lead">@include('include.contact')</p>
    </div>
</main>
@endsection

