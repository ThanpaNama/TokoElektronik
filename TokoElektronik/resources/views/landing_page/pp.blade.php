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
    <nav class="bg-white shadow py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 mr-3">
                <div class="text-black text-lg font-bold">Nusantara TechParts</div>
            </div>
            <div class="space-x-5">
                <a href="#" class="text-black hover:bg-blue-500 px-3 py-2 rounded">Beranda</a>
                <a href="#" class="text-black hover:bg-blue-500 px-3 py-2 rounded">Kategori</a>
                <a href="#" class="text-black hover:bg-blue-500 px-3 py-2 rounded">Tentang Kami</a>
                <a href="#" class="text-black hover:bg-blue-500 px-3 py-2 rounded">Kontak</a>
            </div>
            <a href="#" class="bg-blue-500 text-white hover:bg-blue-600 px-5 py-2 rounded">Sign Up</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-300 py-48">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-black mb-4">"Solusi Komponen Elektronik Terpercaya dari Nusantara"</h1>
            <h2 class="text-3xl font-bold text-black mb-6">Component Marketplace for your Electronical Parts</h2>

            <!-- Search Box -->
            <div class="mt-8">
                <form class="flex justify-center">
                    <input type="text" placeholder="Cari komponen..." class="w-1/2 px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">Cari</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Konten Tambahan untuk Scroll -->
    <section class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-6">Kenapa Memilih Kami?</h2>
            <p class="text-lg mb-10">Kami menawarkan solusi terbaik dengan berbagai pilihan komponen elektronik yang berkualitas.</p>

            <!-- Konten yang lebih panjang -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="font-bold mb-3">Kualitas Terbaik</h3>
                    <p>Kami menjamin setiap komponen yang kami tawarkan memiliki kualitas tinggi dan melalui pengujian ketat.</p>
                </div>
                <div class="p-6 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="font-bold mb-3">Harga Kompetitif</h3>
                    <p>Kami menawarkan harga yang kompetitif dengan kualitas produk yang tidak tertandingi.</p>
                </div>
                <div class="p-6 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="font-bold mb-3">Pengiriman Cepat</h3>
                    <p>Layanan pengiriman kami dapat diandalkan untuk memastikan barang sampai tepat waktu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tambahan konten untuk scroll -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-6">Layanan Unggulan</h2>
            <p class="text-lg mb-10">Kami siap mendukung kebutuhan elektronik Anda dengan layanan terbaik.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="font-bold mb-3">Dukungan 24/7</h3>
                    <p>Tim kami siap melayani Anda kapanpun, selama 24 jam sehari dan 7 hari seminggu.</p>
                </div>
                <div class="p-6 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="font-bold mb-3">Jaminan Garansi</h3>
                    <p>Kami memberikan garansi untuk setiap produk yang dibeli dari marketplace kami.</p>
                </div>
                <div class="p-6 bg-gray-200 rounded-lg shadow-md">
                    <h3 class="font-bold mb-3">Beragam Produk</h3>
                    <p>Pilihan produk yang kami sediakan sangat beragam untuk berbagai kebutuhan elektronik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 Nusantara TechParts. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>
</html>
