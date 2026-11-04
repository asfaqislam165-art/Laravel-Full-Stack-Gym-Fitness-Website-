<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Fitness Gym</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-white text-gray-800 overflow-x-hidden antialiased">

    @include('layouts.navigation')

    <!-- Hero Section -->
    <section
        class="hero min-h-[75vh] sm:min-h-[85vh] lg:min-h-screen bg-cover bg-center relative"
        style="background-image: url('{{ asset('Image Main/Home/1.avif') }}');"
    >
        <div class="hero-overlay bg-black/60"></div>

        <div class="hero-content w-full px-4 sm:px-6 py-12 sm:py-16 text-center text-neutral-content">
            <div class="w-full max-w-4xl mx-auto">

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-wide text-white leading-tight">
                    Transform Your Body At
                    <span class="inline-block"><i class="fa-solid fa-dumbbell text-blue-500"></i> Super Fitness</span>
                </h1>

                <p class="text-sm sm:text-lg md:text-xl max-w-2xl mx-auto mt-4 sm:mt-6 mb-6 sm:mb-8 text-gray-200 leading-relaxed">
                    Join today and build your strength with professional trainers and premium gym facilities.
                </p>

                <a href="{{ route('membership') }}"
                    class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white font-bold px-6 sm:px-8 py-3 rounded-xl shadow-lg hover:shadow-blue-500/30 transition duration-300 text-sm sm:text-base">
                    <span>Get Membership Now</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>
        </div>
    </section>


    <!-- Professional Trainers -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-center mb-8 sm:mb-12 text-gray-900">
            Our Professional Trainers
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach ($trainers as $trainer)

                <div class="border rounded-2xl shadow-sm text-center p-6 bg-white border-blue-100 flex flex-col justify-between hover:shadow-md transition">

                    <div>
                        @if($trainer->image)
                            <img src="{{ asset('img/'.$trainer->image) }}"
                                alt="{{ $trainer->name }}"
                                class="w-24 h-24 sm:w-28 sm:h-28 lg:w-32 lg:h-32 object-cover rounded-full mx-auto mb-4 border-4 border-blue-500 shadow">
                        @else
                            <div class="w-24 h-24 sm:w-28 sm:h-28 lg:w-32 lg:h-32 bg-blue-500 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold shadow">
                                {{ substr($trainer->name, 0, 1) }}
                            </div>
                        @endif

                        <h3 class="text-lg sm:text-xl font-bold text-gray-900 break-words">
                            {{ $trainer->name }}
                        </h3>

                        <p class="text-blue-600 text-xs sm:text-sm font-semibold mt-1 mb-3">
                            {{ $trainer->speciality }}
                        </p>

                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed break-words line-clamp-4">
                            {{ $trainer->bio }}
                        </p>
                    </div>

                </div>

            @endforeach

        </div>
    </section>


    <!-- Mission, Vision, Experience & Commitment -->
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 sm:py-12">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-stretch">

            <!-- Mission -->
            <div class="bg-blue-500 rounded-2xl p-6 sm:p-8 md:p-10 text-white flex flex-col justify-center shadow-lg">

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold flex items-center gap-3">
                    <i class="fa-solid fa-bullseye"></i>
                    <span>Our Mission</span>
                </h2>

                <p class="mt-4 text-sm sm:text-base md:text-lg leading-relaxed text-blue-50">
                    Our mission is to help people achieve their fitness goals through
                    effective workouts, expert guidance, and a healthy lifestyle.
                    We believe that fitness is not just about building muscles but
                    also about improving overall health and confidence. Our goal is
                    to create a welcoming environment where everyone feels motivated
                    to push their limits. We provide personalized training programs
                    designed for different fitness levels and individual needs.
                    Our experienced trainers are always ready to guide and support
                    every member.
                </p>

            </div>


            <!-- Other Information -->
            <div class="flex flex-col gap-4 sm:gap-5 justify-between">

                <!-- Vision -->
                <div class="bg-blue-500 rounded-2xl p-5 sm:p-6 text-white shadow-lg">

                    <h3 class="text-lg sm:text-xl font-bold flex items-center">
                        <i class="fa-solid fa-globe mr-3"></i>
                        Our Vision
                    </h3>

                    <p class="mt-2 leading-relaxed text-xs sm:text-sm md:text-base text-blue-50">
                        To inspire a healthier and stronger community where everyone
                        can feel confident, active, and motivated.
                    </p>

                </div>


                <!-- Experience -->
                <div class="bg-blue-500 rounded-2xl p-5 sm:p-6 text-white shadow-lg">

                    <h3 class="text-lg sm:text-xl font-bold flex items-center">
                        <i class="fa-solid fa-atom mr-3"></i>
                        Our Experience
                    </h3>

                    <p class="mt-2 leading-relaxed text-xs sm:text-sm md:text-base text-blue-50">
                        With professional trainers and modern fitness equipment,
                        we provide a supportive environment for all fitness levels.
                    </p>

                </div>


                <!-- Commitment -->
                <div class="bg-blue-500 rounded-2xl p-5 sm:p-6 text-white shadow-lg">

                    <h3 class="text-lg sm:text-xl font-bold flex items-center">
                        <i class="fa-solid fa-handshake mr-3"></i>
                        Our Commitment
                    </h3>

                    <p class="mt-2 leading-relaxed text-xs sm:text-sm md:text-base text-blue-50">
                        We are committed to delivering personalized training,
                        quality fitness programs, and continuous support for
                        your fitness journey.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- About Super Fitness -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 py-10 sm:py-16">

        <div class="border border-blue-100 rounded-2xl p-6 sm:p-8 md:p-10 bg-white shadow-sm">

            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 border-b-4 border-blue-500 pb-3 inline-block">
                About Super Fitness
            </h2>

            <p class="text-gray-700 leading-relaxed text-sm sm:text-base md:text-lg mb-6">
                Super Fitness is dedicated to providing high-quality fitness
                coaching, premium workout equipment, and a motivating environment
                for everyone. Whether your goal is weight loss, bodybuilding,
                muscle strength, or general stamina, our certified trainers
                guide you every step of the way.
            </p>


            <!-- Statistics -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 text-center mt-8">

                <div class="bg-blue-500 text-white p-5 sm:p-6 rounded-xl shadow">
                    <h3 class="text-2xl sm:text-3xl font-black mb-1">500+</h3>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-blue-100">Active Members</p>
                </div>

                <div class="bg-blue-500 text-white p-5 sm:p-6 rounded-xl shadow">
                    <h3 class="text-2xl sm:text-3xl font-black mb-1">10+</h3>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-blue-100">Certified Trainers</p>
                </div>

                <div class="bg-blue-500 text-white p-5 sm:p-6 rounded-xl shadow">
                    <h3 class="text-2xl sm:text-3xl font-black mb-1">24/7</h3>
                    <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-blue-100">Support & Guidance</p>
                </div>

            </div>

        </div>

    </section>


    <!-- Fitness Images -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12">

        <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-900 mb-8 sm:mb-10">
            Explore Our Fitness Environment
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 justify-items-center">

            <div class="hover-3d w-full max-w-sm rounded-2xl overflow-hidden shadow-lg">
                <figure class="w-full">
                    <img src="{{ asset('Image Main/Facilities/1.jpg') }}"
                        alt="Fitness Facilities"
                        class="w-full h-60 sm:h-72 object-cover hover:scale-105 transition duration-500" />
                </figure>
            </div>

            <div class="hover-3d w-full max-w-sm rounded-2xl overflow-hidden shadow-lg">
                <figure class="w-full">
                    <img src="{{ asset('Image Main/Services/3.jpg') }}"
                        alt="Fitness Training"
                        class="w-full h-60 sm:h-72 object-cover hover:scale-105 transition duration-500" />
                </figure>
            </div>

            <div class="hover-3d w-full max-w-sm rounded-2xl overflow-hidden shadow-lg">
                <figure class="w-full">
                    <img src="{{ asset('Image Main/Services/5.jpg') }}"
                        alt="Gym Workout"
                        class="w-full h-60 sm:h-72 object-cover hover:scale-105 transition duration-500" />
                </figure>
            </div>

        </div>

    </section>


    <!-- Why Choose Super Fitness -->
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 sm:py-12">

        <div class="bg-blue-500 rounded-2xl p-6 sm:p-8 md:p-12 shadow-xl">

            <div class="mx-auto max-w-2xl text-center">

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">
                    Why Choose Super Fitness?
                </h2>

                <p class="mt-4 text-sm sm:text-base md:text-lg text-blue-50 leading-relaxed">
                    At Super Fitness, we are dedicated to helping you become
                    stronger, healthier, and more confident. With expert guidance,
                    modern facilities, and personalized fitness programs.
                </p>

            </div>


            <!-- Feature Cards -->
            <div class="mt-8 sm:mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Feature 1 -->
                <div class="rounded-xl bg-white p-6 shadow-md hover:-translate-y-2 transition duration-300">

                    <div class="inline-flex rounded-lg bg-blue-100 p-4 text-blue-500">
                        <i class="fa-solid fa-dumbbell text-2xl sm:text-3xl"></i>
                    </div>

                    <h3 class="mt-4 text-lg sm:text-xl font-bold text-gray-900">
                        Expert Personal Trainers
                    </h3>

                    <p class="mt-3 text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Our experienced trainers provide professional guidance,
                        personalized workout plans, and continuous support to help
                        you achieve your fitness goals safely and effectively.
                    </p>

                </div>


                <!-- Feature 2 -->
                <div class="rounded-xl bg-white p-6 shadow-md hover:-translate-y-2 transition duration-300">

                    <div class="inline-flex rounded-lg bg-blue-100 p-4 text-blue-500">
                        <i class="fa-solid fa-heart-pulse text-2xl sm:text-3xl"></i>
                    </div>

                    <h3 class="mt-4 text-lg sm:text-xl font-bold text-gray-900">
                        Modern Fitness Facilities
                    </h3>

                    <p class="mt-3 text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Enjoy modern gym equipment, clean workout spaces, and
                        excellent facilities designed to make every training
                        session comfortable, productive, and enjoyable.
                    </p>

                </div>


                <!-- Feature 3 -->
                <div class="rounded-xl bg-white p-6 shadow-md hover:-translate-y-2 transition duration-300 sm:col-span-2 lg:col-span-1">

                    <div class="inline-flex rounded-lg bg-blue-100 p-4 text-blue-500">
                        <i class="fa-solid fa-bullseye text-2xl sm:text-3xl"></i>
                    </div>

                    <h3 class="mt-4 text-lg sm:text-xl font-bold text-gray-900">
                        Personalized Fitness Programs
                    </h3>

                    <p class="mt-3 text-xs sm:text-sm text-gray-600 leading-relaxed">
                        From weight loss to muscle building, our customized
                        fitness programs help you stay motivated, build healthy
                        habits, and achieve lasting results.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- Super Fitness CTA -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">

        <div class="hero bg-base-200 rounded-2xl overflow-hidden shadow-inner">

            <div class="hero-content w-full flex-col lg:flex-row gap-6 sm:gap-10 p-6 sm:p-8 md:p-12 items-center">

                <img
                    alt="Super Fitness Gym"
                    src="{{ asset('Image Main/Home/1.avif') }}"
                    class="w-full lg:w-1/2 max-w-sm h-56 sm:h-72 object-cover rounded-xl shadow-lg"
                />

                <div class="w-full lg:w-1/2 text-center lg:text-left">

                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-500">
                        Super Fitness
                    </h2>

                    <p class="py-4 sm:py-6 text-xs sm:text-sm md:text-base text-gray-700 leading-relaxed font-medium">
                        Super Fitness is your ultimate fitness destination,
                        offering expert trainers, modern equipment, personalized
                        workout plans, and a motivating environment to help you
                        build strength, improve health, and achieve your goals.
                    </p>

                    <a href="{{ route('membership') }}"
                        class="btn bg-blue-500 hover:bg-blue-600 text-white border-none shadow-md">
                        <span>Join Us Today</span>
                        <i class="fa-solid fa-arrow-right ml-2"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="mt-8 sm:mt-12 bg-blue-500 text-white">

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-6 sm:p-10 text-sm">

            <!-- Social Media -->
            <div class="flex flex-col gap-3">

                <h6 class="font-bold text-base uppercase tracking-wider text-white border-b border-blue-400 pb-2 flex items-center gap-2">
                    <i class="fa-solid fa-users"></i>
                    Social Media
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


        <!-- Copyright -->
        <div class="bg-blue-600 text-center p-4 text-xs text-blue-100 border-t border-blue-400">
            <p>Copyright © {{ date('Y') }} Mahin Software Limited - All Rights Reserved</p>
        </div>

    </footer>

</body>
</html>