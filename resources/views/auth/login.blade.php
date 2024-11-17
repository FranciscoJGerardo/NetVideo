@extends('layouts.baselayout')
@section('titulo')
    Login
@endsection
@section('contenido')
    <main>
        <div class="d-flex justify-content-center align-items-center " style="height: 100vh; margin: 0;">

            <div class="login-container">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/email.png') }}" alt="Mail Logo">
                </div>
                
                <h2 style="color: white;" class="mb-4">Mail</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn-login   w-100">Sign in</button>
                </form>
                <div class="mt-3">
                    <p style="color: white;">Don't have an account? <a href="{{ route('register') }}"
                            class="signup-link">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    </html>
@endsection
