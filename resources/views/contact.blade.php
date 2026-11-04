<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Super Fitness</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome & DaisyUI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-white text-gray-800 overflow-x-hidden antialiased flex flex-col min-h-screen">

    @include('layouts.navigation')

    <!-- Hero / Banner Section -->
    <section class="hero bg-base-200 py-10 sm:py-16">
        <div class="hero-content w-full max-w-7xl px-4 sm:px-6 lg:px-8 flex-col lg:flex-row gap-8 sm:gap-12 items-center">
            
            <img
                alt="Super Fitness Gym"
                src="{{ asset('Image Main/Home/1.avif') }}"
                class="w-full max-w-sm sm:max-w-md h-60 sm:h-72 lg:h-80 object-cover rounded-2xl shadow-2xl"
            />

            <div class="w-full text-center lg:text-left">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-blue-500 leading-tight">
                    Get In Touch With Us
                </h1>

                <p class="py-4 sm:py-6 text-sm sm:text-base text-gray-700 leading-relaxed font-medium max-w-2xl">
                    Super Fitness is your ultimate fitness destination. Have questions about our membership, trainers, or facilities? We are here to answer all your inquiries and help you get started on your fitness journey!
                </p>
            </div>

        </div>
    </section>

    <!-- Contact Form & Contact Details Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 w-full flex-grow">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
            
            <!-- Contact Information Cards -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 border-b-4 border-blue-500 pb-2 inline-block">
                        Contact Information
                    </h2>
                    <p class="mt-3 text-sm sm:text-base text-gray-600">
                        Feel free to reach out to us through any of the following contact channels or visit our gym branch directly.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <!-- Address -->
                    <div class="p-5 border border-blue-100 rounded-xl bg-blue-50/50 flex items-start gap-4 shadow-sm">
                        <div class="bg-blue-500 text-white p-3 rounded-lg text-lg">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Our Location</h3>
                            <p class="text-xs sm:text-sm text-gray-600 mt-1">123 Fitness Street, Downtown City</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="p-5 border border-blue-100 rounded-xl bg-blue-50/50 flex items-start gap-4 shadow-sm">
                        <div class="bg-blue-500 text-white p-3 rounded-lg text-lg">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Phone Number</h3>
                            <p class="text-xs sm:text-sm text-gray-600 mt-1">+880 1700-000000</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="p-5 border border-blue-100 rounded-xl bg-blue-50/50 flex items-start gap-4 shadow-sm">
                        <div class="bg-blue-500 text-white p-3 rounded-lg text-lg">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Email Address</h3>
                            <p class="text-xs sm:text-sm text-gray-600 mt-1">info@superfitness.com</p>
                        </div>
                    </div>

                    <!-- Opening Hours -->
                    <div class="p-5 border border-blue-100 rounded-xl bg-blue-50/50 flex items-start gap-4 shadow-sm">
                        <div class="bg-blue-500 text-white p-3 rounded-lg text-lg">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Opening Hours</h3>
                            <p class="text-xs sm:text-sm text-gray-600 mt-1">24/7 Open Every Day</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Send Message Form -->
            <div class="bg-white border border-gray-200 rounded-2xl p-6 sm:p-8 shadow-lg">
                <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-6">
                    Send Us a Message
                </h3>

              
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-auto bg-blue-500 text-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-6 sm:p-10 text-sm">

            <!-- Social Media Links -->
            <div class="flex flex-col gap-3">
                <h6 class="font-bold text-base uppercase tracking-wider text-white border-b border-blue-400 pb-2 flex items-center gap-2">
                    <i class="fa-solid fa-users"></i>
                    Social Media Links
                </h6>
                <a href="#" class="hover:text-blue-100 transition flex items-center gap-2">
                    <i class="fa-brands fa-square-facebook text-lg"></i> Facebook
                </a>
                <a href="#" class="hover:text-blue-100 transition flex items-center gap-2">
                    <i class="fa-brands fa-youtube text-lg"></i> YouTube
                </a>
                <a href="#" class="hover:text-blue-100 transition flex items-center gap-2">
                    <i class="fa-brands fa-x-twitter text-lg"></i> Twitter
                </a>
                <a href="#" class="hover:text-blue-100 transition flex items-center gap-2">
                    <i class="fa-brands fa-square-instagram text-lg"></i> Instagram
                </a>
            </div>

            <!-- Company Navigation Links -->
            <div class="flex flex-col gap-3">
                <h6 class="font-bold text-base uppercase tracking-wider text-white border-b border-blue-400 pb-2">
                    Company
                </h6>
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('about') }}" class="hover:underline">About</a>
                <a href="{{ route('services') }}" class="hover:underline">Services</a>
                <a href="{{ route('facilities') }}" class="hover:underline">Facilities</a>
                <a href="{{ route('membership') }}" class="hover:underline">Membership</a>
            </div>

            <!-- Legal Links -->
            <div class="flex flex-col gap-3">
                <h6 class="font-bold text-base uppercase tracking-wider text-white border-b border-blue-400 pb-2">
                    Legal
                </h6>
                <a href="#" class="hover:underline">Terms of use</a>
                <a href="#" class="hover:underline">Privacy policy</a>
                <a href="#" class="hover:underline">Cookie policy</a>
            </div>

        </div>

        <!-- Copyright Line -->
        <div class="bg-blue-600 text-center p-4 text-xs text-blue-100 border-t border-blue-400">
            <p>Copyright © {{ date('Y') }} Mahin Software Limited - All Rights Reserved</p>
        </div>
    </footer>

</body>
</html>