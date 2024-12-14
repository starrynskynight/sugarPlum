<x-guest-layout>
    <style>
        /* Custom styling to match the provided design */
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

        .form-title {
            font-family: 'Arial', sans-serif;
            color: #a6004c;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
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
            background-color: #FEA8B6;
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
        <div class="form-title">SIGN IN</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="ms-4">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
