@extends('templates.log')

@section('form-log')
    
    <div class="p-2">
        <div class="text-center mt-2">
            <h5 class="text-primary">Esqueceu a Senha?</h5>
            <p class="text-muted">vamos enviar um link para reposição</p>

            <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" style="width: 70px; height: 50px;" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
            </lord-icon>

        </div>
        <x-auth-session-status class="alert border-0 alert-warning text-center mb-2 mx-2" :status="session('status')" />
        
        <form method="POST" action="{{ route('password.email')}}">
            @csrf
            <div class="mb-4">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="text-center mt-4">
                <x-primary-button class="btn btn-info w-100">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form><!-- end form -->
    </div>
@endsection
