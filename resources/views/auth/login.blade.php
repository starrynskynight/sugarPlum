<x-guest-layout>
    <style>
        /* Custom styling to match the pink design */
        body {
            background-image: url('img/pink_donut.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .form-container {
            background: linear-gradient(180deg, #FFF6DF, #F7B5CA);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }

        label {
            color: #a6004c;
            font-weight: bold;
        }

        input {
            border: 1px solid #f9b8d2;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .remember-me label {
            color: #a6004c;
        }

        a {
            color: #a6004c;
            text-decoration: none;
        }

        button {
            background-color: #f98fb1;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            width: 100%;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff6582;
        }
    </style>

    <div class="form-container">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full bg-white" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full bg-white"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 remember-me">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-pink-500 shadow-sm focus:ring-pink-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="ms-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
