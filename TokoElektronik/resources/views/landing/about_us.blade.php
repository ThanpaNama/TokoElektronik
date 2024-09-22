<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Nusantara TechParts</title>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow py-3">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/image4.png') }}" class="h-8 mr-10">
                <div class="text-black text-2xl font-bold">Nusantara TechParts</div>
            </div>
            <div class="space-x-5">
                <a href="{{url('/')}}" class="text-black hover:bg-blue-500 px-4 py-3 rounded">Beranda</a>
                <a href="{{url('/kategori')}}" class="text-black hover:bg-blue-500 px-4 py-3 rounded">Kategori</a>
                <a href="{{url('/aboutus')}}" class="text-black bg-blue-500 px-4 py-3 rounded">Tentang Kami</a>
                <a href="{{url('/contact')}}" class="text-black hover:bg-blue-500 px-4 py-3 rounded">Kontak</a>
            </div>
            <div class="flex space-x-3">
            <a href="#" class="bg-blue-500 text-white hover:bg-blue-600 px-5 py-2 rounded">Sign Up</a>
            <a href="#" class="bg-gray-400 text-white hover:bg-blue-600 px-5 py-2 rounded">Sign In</a>
            </div>
        </div>
        </div>
    </nav>
<h1>about us</h1>

</body>
</html>
