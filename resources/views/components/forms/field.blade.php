@props(['label', 'name'])

<div class="grid grid-cols-1 rounded-md shadow-sm sm:max-w-md">
    @if ($label)
        <x-forms.label :$name :$label />
    @endif

    <div class="flex mt-2">
        {{ $slot }}

        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
