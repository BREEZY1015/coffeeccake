@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium font-bold text-2xl text-black-900 dark:text-black-900']) }}>
    {{ $value ?? $slot }}
</label>
