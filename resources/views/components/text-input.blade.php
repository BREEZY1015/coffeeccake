@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-black-900 dark:border-black-900 border-y-4 border-x-4 dark:bg-transparent dark:text-black-900 focus:border-yellow-900 dark:focus:border-yellow-900 focus:ring-yellow-900 dark:focus:ring-yellow-900 rounded-md shadow-lg']) !!}>
