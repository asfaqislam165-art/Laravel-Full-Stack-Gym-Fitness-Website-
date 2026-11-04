<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-white px-4">
        <div class="w-full max-w-md border border-blue-200 p-6 rounded-2xl shadow-sm bg-white outline-none focus:outline-none">
            <h2 class="text-2xl font-extrabold text-center text-blue-500 mb-1">JOIN SUPER FITNESS</h2>
            <p class="text-center text-xs text-gray-500 mb-4">Create your member account</p>

            <form method="POST" action="{{ route('register') }}" class="space-y-3">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-gray-700">Full Name</label>
                    <input type="text" name="name" required class="w-full mt-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-blue-500 focus:ring-0 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700">Email Address</label>
                    <input type="email" name="email" required class="w-full mt-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-blue-500 focus:ring-0 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700">Password</label>
                    <input type="password" name="password" required class="w-full mt-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-blue-500 focus:ring-0 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" required class="w-full mt-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:border-blue-500 focus:ring-0 outline-none">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2.5 rounded-lg text-sm hover:bg-blue-600 transition focus:outline-none focus:ring-0">
                    Register Account
                </button>
                <p class="text-center text-xs text-gray-600 pt-1">
                    Already have an account? <a href="{{ route('login') }}" class="text-blue-500 font-bold hover:underline">Log in</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>