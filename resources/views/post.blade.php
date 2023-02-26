@extends('layout')

@section('contents')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="d-flex flex-column justify-content-center align-items-center gap-3">
            <div class="border p-4 col-6">

                <h2>{{ $post->title }}</h2>

                <p>By <a href="#">{{ $post->author->username }} </a>in <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a></p>

                @if ($post->body)
                    {!! $post->body !!}
                @endif

                <a href="/">Go back</a>
            </div>
        </div>
    </div>
@endsection

