<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-white">
    <header class="flex items-center justify-between p-4">
        <div class="flex items-center">
            <div class="w-10 h-10 bg-pink-500 rounded-full"></div>
            <span class="ml-2 text-2xl font-bold">CIHUYY</span>
        </div>
        <nav class="flex space-x-4">
            <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Products</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Pricing</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">About us</a>
            <a href="{{ route('login') }}" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">Login</a>
        </nav>
    </header>
    <main class="flex items-center justify-between h-screen px-20">
        <div class="max-w-lg">
            <p class="text-4xl font-bold mb-4">"Unlock Your Potential With Expert-Led Courses Anytime, Anywhere. Join Now And Start Learning Today!"</p>
            <button class="px-6 py-3 mt-4 text-white bg-black rounded-full hover:bg-gray-800">
                Start Course Now <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
        <div class="w-96 h-96 bg-pink-500 rounded-full"></div>
    </main>
</body>
</html>