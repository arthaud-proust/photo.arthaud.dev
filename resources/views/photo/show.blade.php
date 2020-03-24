@extends('layouts.app')

@section('title', $photo->name? $photo->name : "Image")
@section('style', 'photo')

@section('header', '')

@section('view')



<main class="background" style="background: {{$photo->background}};">
    <a href="/{{ $photo->gallery}}">
        <button type="button" class="close  fixed-top p-3" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </a>
    <div class="item">
        <img src="{{ $photo->src }}" class="image" alt="{{ $photo->name }}">
        <div class="content">
            <h1>{{ $photo->name }}</h1>
            @if($photo->name)
            <hr>
            @endif
            <h6>{{ $photo->gallery_name }} {{ $photo->date? "- ".$photo->date:"" }}</h6>
            <p>{{ $photo->text }}</p>
            @if (Auth::check())
            <a href="/photo/{{$photo->slug}}/edit">Editer</a>
            @endif
        </div>
    </div>
</main>


@endsection

@section('nofooter', '')
