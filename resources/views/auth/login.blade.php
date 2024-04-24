<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo"></x-slot>
        <div class="flex items-center justify-center">
            <div><x-authentication-card-logo /></div>
        </div>
        <p class="mt-4 text-xl text-center text-gray-900 dark:text-white font-extrabold text-login-green">เข้าสู่ระบบ
            Organic
            <a class="text-login-pastel">Plus+</a>
        </p>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form class="mt-4" method="POST" action="{{ route('login') }}">
            @csrf

            <div>

                <p
                    class="cursor-pointer flex items-center w-full p-2 text-login-pastel text-base transition duration-75 rounded-lg group hover:bg-login-pasteldark:text-login-pastel dark:hover:bg-login-pastel">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 group-hover:text-login-pastel dark:text-login-pastel dark:group-hover:text-login-pastel">
                        <path fill-rule="evenodd"
                            d="M9.493 2.852a.75.75 0 0 0-1.486-.204L7.545 6H4.198a.75.75 0 0 0 0 1.5h3.14l-.69 5H3.302a.75.75 0 0 0 0 1.5h3.14l-.435 3.148a.75.75 0 0 0 1.486.204L7.955 14h2.986l-.434 3.148a.75.75 0 0 0 1.486.204L12.456 14h3.346a.75.75 0 0 0 0-1.5h-3.14l.69-5h3.346a.75.75 0 0 0 0-1.5h-3.14l.435-3.148a.75.75 0 0 0-1.486-.204L12.045 6H9.059l.434-3.148ZM8.852 7.5l-.69 5h2.986l.69-5H8.852Z"
                            clip-rule="evenodd" />
                    </svg>

                    <x-label-organice class="ml-2" for="password" value="{{ __('รหัสพนักงาน') }}" />
                </p>

                <x-input-organice id="email" class="block mt-1 w-full  text-login-green" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <p
                    class="cursor-pointer flex items-center w-full p-2 text-login-pastel text-base transition duration-75 rounded-lg group hover:bg-login-pasteldark:text-login-pastel dark:hover:bg-login-pastel">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="w-5 h-5 group-hover:text-login-pastel dark:text-login-pastel dark:group-hover:text-login-pastel">
                        <path fill-rule="evenodd"
                            d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                            clip-rule="evenodd" />
                    </svg>


                    <x-label-organice class="ml-2" for="password" value="{{ __('รหัสผ่าน') }}" />
                </p>


                <x-input-organice id="password" class="block mt-1 w-full text-login-green" type="password" name="password" required
                    autocomplete="current-password" />
            </div>
            <div class="mt-4 text-center items-center">
                <x-button-organice class="w-full">
                    {{ __('เข้าสู่ระบบ') }}
                </x-button-organice>

            </div>
            <div class="mt-4 text-center items-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-login-pastel hover:text-tomato rounded-md focus:outline-none"
                        href="{{ route('password.request') }}">
                        {{ __('ลืมรหัสผ่าน?') }}
                    </a>
                @endif

            </div>

        </form>
    </x-authentication-card>

</x-guest-layout>
