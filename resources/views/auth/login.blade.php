<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-white px-4">
        <div class="w-full max-w-md border border-blue-200 p-6 rounded-2xl shadow-none bg-white">
            <h2 class="text-2xl font-extrabold text-center text-blue-500 mb-1">SUPER FITNESS</h2>
            <p class="text-center text-xs text-gray-500 mb-4">Login to manage your membership status</p>

            <form method="POST" action="{{ route('login') }}" class="space-y-3">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-gray-700">Email Address</label>
                    <input type="email" name="email" required autofocus class="w-full mt-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-0 ring-0 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700">Password</label>
                    <input type="password" name="password" required class="w-full mt-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-0 ring-0 outline-none">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2.5 rounded-lg text-sm hover:bg-blue-600 transition focus:outline-none focus:ring-0 ring-0">
                    Log In
                </button>
                <p class="text-center text-xs text-gray-600 pt-1">
                    Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 font-bold hover:underline focus:outline-none">Register now</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>