@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'block flex-1 rounded-md border-0 bg-transparent py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:text-sm sm:leading-6',
        'value' => old($name),
        'autocomplete' => 'off'
    ];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }} required>
</x-forms.field>

