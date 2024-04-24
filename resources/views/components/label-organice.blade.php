@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-login-green']) }}>
    {{ $value ?? $slot }}
</label>
