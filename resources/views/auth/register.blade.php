<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            max-width: 450px;
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
            color: black; /* Soft turquoise */
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #4682b4; /* Soft turquoise */
        }

        #alr {
            text-decoration: none;
            color: #000;
        }

        #alr:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        .btn-primary {
            background-color: #4169e1; /* Deep royal blue */
            border-color: #4169e1;
            width: 35%;
        }

        .btn-primary:hover {
            background-color: #3a5bb0;
            border-color: #324792;
        }

        .form-check-label {
            margin-left: 0.25rem;
        }

        .switch-link {
            font-size: 0.875rem;
            text-align: center;
            margin-top: 1rem;
        }

        .switch-link a {
            color: #4169e1; /* Deep royal blue */
            text-decoration: none;
        }

        .switch-link a:hover {
            color: #3a5bb0;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h2><b>Register</b></h2>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                <input id="phone" type="text" class="form-control" name="phone" :value="old('phone')" required autocomplete="phone">
                <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">{{ __('Address') }}</label>
                <input id="address" type="text" class="form-control" name="address" :value="old('address')" required autocomplete="address">
                <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a id="alr" class="switch-link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
