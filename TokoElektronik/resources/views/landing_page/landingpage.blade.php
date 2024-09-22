<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

  <!-- Header Section -->
  <header class="bg-blue-600 text-white">
    <div class="container mx-auto p-5">
      <h1 class="text-3xl font-bold">Welcome to Our Service</h1>
      <p class="text-lg mt-2">Leading the way in innovation and quality.</p>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold text-gray-800">Your Journey Starts Here</h2>
      <p class="text-lg mt-4 text-gray-600">Discover our services and solutions tailored for your success.</p>
      <a href="#services" class="mt-8 inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-bold">Learn More</a>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-16 bg-gray-200">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold mb-4">Service One</h3>
          <p class="text-gray-600">Innovative and efficient solutions designed for you.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold mb-4">Service Two</h3>
          <p class="text-gray-600">Quality service that meets your expectations.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold mb-4">Service Three</h3>
          <p class="text-gray-600">Delivering results, every time.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-blue-600 text-white py-6">
    <div class="container mx-auto text-center ">
      <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
  </footer>

  @vite('resources/js/app.js')
</body>
</html>
