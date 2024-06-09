<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            background-color: #f6b092;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h2 {
            margin: 0;
            color: black;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 40%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .form-check-label {
            margin-left: 0.25rem;
        }

        .forgot-password-link {
            text-decoration: none;
            font-size: 0.875rem;
            color: black;
        }

        .forgot-password-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .switch-link {
            font-size: 0.875rem;
            text-align: center;
            margin-top: 1rem;
        }

        .switch-link a {
            color: #007bff;
            text-decoration: none;
        }

        .switch-link a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h2><b>Login</b></h2>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                @if (Route::has('password.request'))
                <a class="forgot-password-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <button type="submit" class="btn btn-primary">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
        
        <div class="switch-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
