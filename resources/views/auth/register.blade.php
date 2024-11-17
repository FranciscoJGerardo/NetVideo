@extends('layouts.baselayout')
@section('contenido')
    <main class="d-flex justify-content-center align-items-center " style="height: 100vh; margin: 0;">
        <div class="login-container">
            <div class="logo">
                <img style="color: white;" src="{{ Vite::asset('resources/images/register.png') }}" alt="Logo"
                    style="width: 80px;">
            </div>
            <h2 style="color: white;" class="mb-4">Register</h2>
            <!-- Formulario de registro -->
            <form action="{{ route('register') }}" method="POST">
                @csrf <!-- Token CSRF para seguridad -->

                <!-- Nombre -->
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Full Name"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email Address"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Confirmar Contraseña -->
                <div class="mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                        required>
                </div>

                <!-- Botón de registro -->
                <button type="submit" class="btn-login w-100">Register</button>
            </form>

            <div class="mt-3">
                <p style="color: white;">Already have an account? <a href="{{ route('login') }}" class="signup-link">Sign
                        in</a></p>
            </div>
        </div>
    </main>
@endsection
