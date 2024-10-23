<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="bg-purple-500 rounded-full w-10 h-10"></div>
                <h1 class="text-2xl font-bold ml-2">CHIUYY</h1>
            </div>
            <nav class="flex items-center space-x-4">
                <a class="text-gray-700" href="#">Home</a>
                <a class="text-gray-700" href="#">Products</a>
                <a class="text-gray-700" href="#">Pricing</a>
                <a class="text-gray-700" href="#">About Us</a>
                <!-- User Profile Link -->
                @auth
                <span class="text-gray-700">
                    <i class="fas fa-user-circle"></i> {{ Auth::user()->name }}
                </span>
                <!-- Logout Form -->
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-red-500">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
                @endauth
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Course Cards (as before) -->
            <!-- Course Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Colorful computer screen with design software open" class="w-full h-48 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/NkS40i6eoP3ufUR8RtTvEUtJCeBTswqIMP5FQMPSCskhe4mOB.jpg" width="600" />
                <div class="p-4">
                    <h2 class="text-lg font-semibold">Learn Figma - UI/UX Design Essential Training</h2>
                    <button class="bg-black text-white px-4 py-2 mt-4 rounded">Start Course</button>
                    <div class="flex items-center justify-end mt-2">
                        <span class="bg-yellow-400 text-white px-2 py-1 rounded-full">4</span>
                    </div>
                </div>
            </div>
            <!-- Additional Course Cards... -->
        </div>
    </main>
</body>

</html>