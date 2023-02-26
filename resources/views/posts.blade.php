<x-layout>

    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        {{-- Checks if theres a post present in database --}}
        @if ($posts->count())

        <x-post-featured-card :post="$posts->first()"/>

        {{-- Removes the children element when no post is present --}}
         @if ($posts->count() > 1)
            <div class="lg:grid lg:grid-cols-6">
                @foreach ($posts->skip(1) as $post)
                    <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"/>
                @endforeach
            </div>
         @endif

        @else
            {{--This will show if theres no post present--}}
            <div class="text-center">No post yet. Try adding some.</div>

        @endif

    </main>

</x-layout>
