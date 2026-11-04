<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainers - Super Fitness</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome & DaisyUI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-white text-gray-800 overflow-x-hidden antialiased flex flex-col min-h-screen">

    @include('layouts.navigation')

    <!-- Header Section -->
    <section class="bg-blue-500 text-white py-10 sm:py-16 text-center px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-wide">
                Our Expert Trainers
            </h1>
            <p class="text-blue-100 mt-3 text-sm sm:text-base md:text-lg max-w-xl mx-auto">
                Meet our professional trainers ready to help you reach your fitness goals.
            </p>
        </div>
    </section>

    <!-- Trainers Grid Section -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16 flex-grow w-full">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            
            @forelse ($trainers as $trainer)
                <div class="border border-blue-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition duration-300 p-6 text-center bg-white flex flex-col items-center justify-between">
                    
                    <div class="w-full">
                        <!-- Trainer Image / Initial Avatar -->
                        @if($trainer->image)
                            <img src="{{ asset('img/'.$trainer->image) }}" 
                                 alt="{{ $trainer->name }}" 
                                 class="w-28 h-28 sm:w-32 sm:h-32 object-cover rounded-full mx-auto mb-4 border-4 border-blue-500 shadow">
                        @else
                            <div class="w-28 h-28 sm:w-32 sm:h-32 bg-blue-500 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-3xl font-bold shadow">
                                {{ substr($trainer->name, 0, 1) }}
                            </div>
                        @endif

                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-1 break-words">
                            {{ $trainer->name }}
                        </h3>

                        <p class="text-blue-600 font-semibold text-xs sm:text-sm mb-3">
                            {{ $trainer->speciality }}
                        </p>

                        <p class="text-xs sm:text-sm text-gray-600 mb-6 leading-relaxed break-words">
                            {{ $trainer->bio ?? 'Certified fitness trainer focused on strength, endurance, and proper body conditioning.' }}
                        </p>
                    </div>
                    
                    <a href="{{ route('membership') }}" class="w-full mt-auto bg-blue-500 text-white px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold hover:bg-blue-600 transition shadow-md">
                        Join & Train With Us
                    </a>

                </div>
            @empty
                <!-- Empty State -->
                <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-16 bg-blue-50/50 rounded-2xl border border-dashed border-blue-200 p-8">
                    <div class="text-blue-500 text-4xl mb-3">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">No Trainers Found</h3>
                    <p class="text-sm text-gray-500">
                        No trainers have been added yet. Admin can add trainers from the admin panel!
                    </p>
                </div>
            @endforelse

        </div>

    </main>

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

            <!-- Company Links -->
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