@extends('templates.log')

@section('form-log')

<div class="text-center mt-2">
    <h5 class="text-primary">Bem Vindo!</h5>
    <p class="text-muted">logar para continuar...</p>
</div>
<div class="p-2 mt-2">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="email" class="form-control" id="username" placeholder="Enter username"  required autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <!-- Password -->
            <div class="mb-3">
                <div class="float-end">
                    <a href="{{ route('password.request') }}" class="text-muted">Esqueceu a senha?</a>
                </div>
                <label class="form-label" for="password-input">Password</label>
                <div class="position-relative auth-pass-inputgroup mb-3">
                    <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                    <span
                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha?') }}
                </a>
            @endif

            <div class="mt-4">
                <x-primary-button class="btn btn-info w-100">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</div>
    
@endsection