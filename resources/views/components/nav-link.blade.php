@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm text-white dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-transparent text-sm text-gray-600 dark:text-gray-400 hover:text-white dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-indigo-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
