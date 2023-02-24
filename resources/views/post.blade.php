@extends('layout')

@section('contents')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="d-flex flex-column justify-content-center align-items-center gap-3">
            <div class="border col-6 p-4">

                <h2>{{ $post->title }}</h2>

                @if ($post->body)
                    {!! $post->body !!}
                @endif

                <a href="/">Go back</a>
            </div>
        </div>
    </div>
@endsection

