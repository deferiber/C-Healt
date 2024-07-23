@props(['active'])

@php
$classes = ($active ?? false)
? 'flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-300
dark:bg-neutral-700 dark:text-white" bg-gray-300 hover:cursor-default'
: 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-300
dark:hover:bg-neutral-700 dark:text-neutral-700 dark:hover:text-neutral-700 hover:cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>