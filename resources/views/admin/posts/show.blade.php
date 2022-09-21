@extends('layouts.app')


@section('content')
    <div class="container text-center mt-3">
        <h2>{{ $post->title }}</h2>
        <p class="p-3">{{ $post->author }}</p>
        <div>
            <img src="{{ $post->thumb }}" alt="">
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="my-5">Data Post : {{ $post->post_date }}</h4>
                <h4 class="my-5">Contenuto Post  : {{ $post->post_content }}</h4>
            </div>
        </div>
    </div>
@endsection