<nav x-data="{ open: false }" class="bg-blue-500 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Logo & Desktop Navigation -->
            <div class="flex items-center space-x-8">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="text-xl sm:text-2xl font-extrabold tracking-wider text-white focus:outline-none flex items-center gap-2">
                    <i class="fa-solid fa-dumbbell"></i>
                    <span>SUPER FITNESS</span>
                </a>

                <!-- Desktop Links -->
                <div class="hidden md:flex items-center space-x-6">
                    @if (Auth::check() && Auth::user()->usertype == 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-200 font-semibold transition">Dashboard</a>
                        <a href="{{ route('admin.memberships.index') }}" class="hover:text-blue-200 font-semibold transition">Memberships</a>
                        <a href="{{ route('admin.facilities.index') }}" class="hover:text-blue-200 font-semibold transition">Facilities</a>
                        <a href="{{ route('admin.services.index') }}" class="hover:text-blue-200 font-semibold transition">Services</a>
                        <a href="{{ route('admin.trainers.index') }}" class="hover:text-blue-200 font-semibold transition">Trainers</a>
                    @else
                        <a href="{{ route('home') }}" class="hover:text-blue-200 font-semibold transition">Home</a>
                        <a href="{{ route('about') }}" class="hover:text-blue-200 font-semibold transition">About</a>
                        <a href="{{ route('membership') }}" class="hover:text-blue-200 font-semibold transition">Membership</a>
                        <a href="{{ route('services') }}" class="hover:text-blue-200 font-semibold transition">Services</a>
                        <a href="{{ route('facilities') }}" class="hover:text-blue-200 font-semibold transition">Facilities</a>
                        <a href="{{ route('trainers') }}" class="hover:text-blue-200 font-semibold transition">Trainers</a>
                        <a href="{{ route('contact') }}" class="hover:text-blue-200 font-semibold transition">Contact</a>
                    @endif
                </div>
            </div>

            <!-- Desktop Auth Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                    <a href="{{ route('profile.edit') }}" class="hover:text-blue-200 font-semibold text-sm transition">Profile</a>
                    <span class="font-medium text-sm border-l border-blue-400 pl-4">{{ Auth::user()->name }}</span>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-white text-blue-500 px-3 py-1.5 rounded-lg font-bold hover:bg-blue-50 transition text-sm shadow-sm">
                            Log Out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:text-blue-200 font-semibold transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-white text-blue-500 px-4 py-2 rounded-lg font-bold hover:bg-blue-50 transition text-sm shadow-sm">
                        Register
                    </a>
                @endauth
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex md:hidden items-center">
                <button @click="open = !open" class="text-white hover:text-blue-200 focus:outline-none p-2">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden bg-blue-600 border-t border-blue-400 px-4 pt-3 pb-6 space-y-3 transition duration-200">
        
        @if (Auth::check() && Auth::user()->usertype == 'admin')
            <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Dashboard</a>
            <a href="{{ route('admin.memberships.index') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Memberships</a>
            <a href="{{ route('admin.facilities.index') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Facilities</a>
            <a href="{{ route('admin.services.index') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Services</a>
            <a href="{{ route('admin.trainers.index') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Trainers</a>
        @else
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">About</a>
            <a href="{{ route('membership') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Membership</a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Services</a>
            <a href="{{ route('facilities') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Facilities</a>
            <a href="{{ route('trainers') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Trainers</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md font-semibold hover:bg-blue-700 transition">Contact</a>
        @endif

        <div class="pt-4 border-t border-blue-500">
            @auth
                <div class="px-3 mb-3">
                    <span class="block font-bold text-base text-white">{{ Auth::user()->name }}</span>
                    <a href="{{ route('profile.edit') }}" class="text-xs text-blue-200 hover:underline">Edit Profile</a>
                </div>
                
                <form method="POST" action="{{ route('logout') }}" class="px-3">
                    @csrf
                    <button type="submit" class="w-full text-center bg-white text-blue-600 px-4 py-2 rounded-lg font-bold hover:bg-blue-50 transition text-sm shadow">
                        Log Out
                    </button>
                </form>
            @else
                <div class="flex flex-col gap-2 px-3">
                    <a href="{{ route('login') }}" class="text-center block border border-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition text-sm">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="text-center block bg-white text-blue-600 px-4 py-2 rounded-lg font-bold hover:bg-blue-50 transition text-sm shadow">
                        Register
                    </a>
                </div>
            @endauth
        </div>

    </div>
</nav>