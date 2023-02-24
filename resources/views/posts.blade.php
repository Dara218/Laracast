@extends('layout')

@section('contents')
<div class="d-flex justify-content-center align-items-center py-4">
  <div class="d-flex flex-column justify-content-center align-items-center gap-3">
    <div class="border col-6 p-4">

     @foreach ($posts as $post)

      <a href="/posts/{{ $post->slug }}" class="{{ $loop->even ? 'text-primary fs-3' : 'text-secondary fs-3' }}">

         {{ $post->title }}
      </a>

      <p class="post-content">
          {!! $post->body !!}
      </p>

      @endforeach

  </div>
</div>
</div>
@endsection
