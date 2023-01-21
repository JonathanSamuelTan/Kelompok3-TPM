<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
</head>
<body>
    <section id="login-page">
        <div class="page-1">
            <div class="text">
                <h2>Welcome Back</h2>
                <p>Please enter the information you entered while registering</p>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form id="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-form">
                    <label for="Nama-Team">Nama Team</label>
                    <input type="text" name="name" id="Nama-Team" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="input-form password">
                    <label for="Passowrd-login">Password</label>
                    <input type="password" name="password" id="Passowrd-login" required autocomplete="current-password"/>
                    <span onclick="showPassword()">
                        <iconify-icon icon="ph:eye-closed-duotone" class="hidden-icon" id="hide1"></iconify-icon>
                        <iconify-icon icon="pepicons-pop:eye" class="hidden-icon" id="hide2"></iconify-icon>
                    </span>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <div class="button-login">
                        <button type="submit" id="login">{{ __('Log in') }}</button>
                    </div>
                </div>

                <div class="Regis-ulang">
                    <p style="color: #707070
                    ">Belum memiliki akun?</p>
                    <a href="{{route('register')}}">
                    <p style="color: #0D4C92
                    "> Register disini</p>
                    </a>
                </div>
            </form>
        </div>
        <div class="logo-regis">
            <img src="assets/logoRegis.png" width="205.74px" height="29.87px" alt="LogoTechnoscape2023">
        </div>
    </section>
    <script src="{{asset('js/Login.js')}}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>
