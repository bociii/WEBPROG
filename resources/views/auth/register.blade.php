<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
        <h1 class="text-3xl mb-6">{{ __('Register') }}</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4 relative">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full p-3 rounded-md focus:outline-none" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-300" />
            </div>

            <!-- Email Address -->
            <div class="mb-4 relative">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full p-3 rounded-md focus:outline-none" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full p-3 rounded-md focus:outline-none" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4 relative">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full p-3 rounded-md focus:outline-none" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-300" />
            </div>

            <div class="flex items-center justify-between mb-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-md">Register</button>
        </form>
    </div>
</