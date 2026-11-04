<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Super Fitness</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- DaisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-white text-gray-800 overflow-x-hidden antialiased">

    @include('layouts.navigation')

    <!-- About Super Fitness Main Section -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 py-10 sm:py-16">
        <div class="border border-blue-100 rounded-2xl p-6 sm:p-8 md:p-10 bg-white shadow-sm">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 border-b-4 border-blue-500 pb-3 inline-block">
                About Super Fitness
            </h1>
            
            <p class="text-gray-700 leading-relaxed text-sm sm:text-base md:text-lg mb-6">
                Super Fitness is dedicated to providing high-quality fitness coaching, premium workout equipment, and a motivating environment for everyone. Whether your goal is body weight loss, bodybuilding, muscle strength, or general stamina, our certified trainers guide you every step of the way.
            </p>

            <!-- Statistics Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 text-center mt-8 sm:mt-10">
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

    <!-- 3D Image Cards Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 justify-items-center">

            <!-- Card 1 -->
            <div class="hover-3d w-full max-w-sm rounded-2xl overflow-hidden shadow-lg">
                <figure class="w-full">
                    <img src="{{ asset('Image Main/Facilities/1.jpg') }}" alt="Super Fitness Facility" class="w-full h-60 sm:h-72 object-cover hover:scale-105 transition duration-500" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>

            <!-- Card 2 -->
            <div class="hover-3d w-full max-w-sm rounded-2xl overflow-hidden shadow-lg">
                <figure class="w-full">
                    <img src="{{ asset('Image Main/Services/3.jpg') }}" alt="Super Fitness Training" class="w-full h-60 sm:h-72 object-cover hover:scale-105 transition duration-500" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>

            <!-- Card 3 -->
            <div class="hover-3d w-full max-w-sm rounded-2xl overflow-hidden shadow-lg">
                <figure class="w-full">
                    <img src="{{ asset('Image Main/Services/5.jpg') }}" alt="Super Fitness Workout" class="w-full h-60 sm:h-72 object-cover hover:scale-105 transition duration-500" />
                </figure>
                <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
            </div>

        </div>
    </section>

    <!-- Why Choose Super Fitness Section -->
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10 sm:py-16">
        <div class="bg-blue-500 rounded-2xl p-6 sm:p-8 md:p-12 shadow-xl">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white">
                    Why Choose Super Fitness?
                </h2>

                <p class="mt-4 text-sm sm:text-base md:text-lg text-blue-50 leading-relaxed">
                    At Super Fitness, we are dedicated to helping you become stronger,
                    healthier, and more confident. With expert guidance, modern facilities,
                    and personalized fitness programs, we make your fitness journey
                    effective, enjoyable, and rewarding.
                </p>
            </div>

            <!-- Feature Cards Grid -->
            <div class="mt-8 sm:mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Feature 1 -->
                <div class="rounded-xl bg-white p-6 shadow-md hover:-translate-y-2 transition duration-300">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">
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
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">
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
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">
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

</body>
</html>