@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1  text-sm font-medium leading-5 text-gray-900 hover:text-gray-400 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  border-transparent text-sm font-medium leading-5 text-gray-900 hover:text-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
