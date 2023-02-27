{{-- @props(['categories']) --}}
<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <x-dropdown>

                <x-slot name="trigger">
                     <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left">{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                    </button>
                </x-slot>

                {{-- Default value --}}
                <x-dropdown-item href="/">All</x-dropdown-item>


                @foreach ($categories as $category)
                    <x-dropdown-item href="categories/{{ $category->slug }}">{{ ucwords($category->name) }}</x-dropdown-item>

                    {{-- <a href="/categories/{{ $category->slug }}" class="block text-left px-3 text-small leading-6 hover:bg-blue-500 hover:text-white focus:text-white focus:bg-blue-500" {{ isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-blue-500 text-white' : '' }}>{{ ucwords($category->name) }}</a> --}}
                @endforeach
            </x-dropdown>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
