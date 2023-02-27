{{-- Default value --}}
<a {{ $attributes->merge(['class'=>"block text-left px-3 text-small leading-6 hover:bg-blue-500 hover:text-white focus:text-white focus:bg-blue-500"]) }}>{{ $slot }}</a>
