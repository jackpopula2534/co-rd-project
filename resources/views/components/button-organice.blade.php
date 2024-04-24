<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover:bg-tomato text-white font-bold py-2 px-4 rounded-full bg-login-pastel']) }}>
    {{ $slot }}
</button>
