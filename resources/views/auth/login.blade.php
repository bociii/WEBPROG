<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: url('https://placehold.co/800x600/forest-background') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 30px;
            max-width: 400px;
            margin: 100px auto;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .login-container input {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding-left: 40px; /* Add padding to make space for the icon */
        }
        .login-container input::placeholder {
            color: white;
        }
        .login-container a {
            color: #a3bffa;
        }
        .icon {
            position: absolute;
            left: 10px; /* Adjust left position */
            top: 50%; /* Center vertically */
            transform: translateY(-50%); /* Adjust to center */
            color: white;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-purple-900">
    <div class="login-container text-white text-center">
        <h1 class="text-3xl mb-6">{{ __('Login') }}</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4 relative">
                <x-input-label for="email" :value="__('Email')" class="text-white" />
                <x-text-input id="email" class="block mt-1 w-full p-3 rounded-md focus:outline-none" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <x-input-label for="password" :value="__('Password')" class="text-white" />
                <x-text-input id="password" class="block mt-1 w-full p-3 rounded-md focus:outline-none" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox text-purple-600" name="remember">
                    <span class="ml-2">{{ __('Remember Me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm">{{ __('Forgot Password?') }}</a>
                @endif
            </div>

            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-md">Login</button>
        </form>
        <p class="mt-4">Don't have an account? <a href="{{ route('register') }}" class="text-sm">{{ __('Register') }}</a></p>
    </div>
</body>
</html>