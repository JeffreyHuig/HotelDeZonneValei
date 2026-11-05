@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    {{-- <span class="w-2 h-2 bg-white inline-block"></span> --}}
    <label class="block text-sm font-medium leading-6 text-gray-900" for="{{ $name }}">{{ $label }}</label>
</div>
