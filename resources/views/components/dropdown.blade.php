@props(['trigger'])

<div x-data="{ show: true }" @click.away="show = false">

    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-2 bg-gray-100 w-full mt-2 rounded-xl absolute z-50 overflow-auto max-h-52" style="display: none">
            {{ $slot }}
    </div>

</div>
