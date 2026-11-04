<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800">Gym Membership Application</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-200 p-8 rounded-xl shadow-sm">
                
                <!-- Success / Status Message -->
                @if(session('status'))
                    <div class="mb-6 p-4 bg-blue-500 text-white rounded-lg font-medium shadow">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-500 text-white rounded-lg shadow">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Membership Form -->
                <form action="{{ route('membership.store') }}" method="POST" class="space-y-5">
                    @csrf

                    <!-- Member Name -->
                    <div>
                        <label class="block font-semibold text-sm text-gray-700 mb-1">Full Name</label>
                        <input type="text" name="member_name" value="{{ old('member_name', Auth::user()->name ?? '') }}" required 
                            class="w-full border border-gray-300 rounded-md p-2.5 focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block font-semibold text-sm text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" value="{{ old('email', Auth::user()->email ?? '') }}" required 
                            class="w-full border border-gray-300 rounded-md p-2.5 focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block font-semibold text-sm text-gray-700 mb-1">Phone Number</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" required placeholder="e.g., 017xxxxxxxx" 
                            class="w-full border border-gray-300 rounded-md p-2.5 focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Package Type -->
                    <div>
                        <label class="block font-semibold text-sm text-gray-700 mb-1">Select Package</label>
                        <select name="package_type" required 
                            class="w-full border border-gray-300 rounded-md p-2.5 focus:border-blue-500 focus:ring focus:ring-blue-200">
                            <option value="">-- Choose Package --</option>
                            <option value="Monthly Plan" {{ old('package_type') == 'Monthly Plan' ? 'selected' : '' }}>Monthly Plan</option>
                            <option value="Quarterly Plan" {{ old('package_type') == 'Quarterly Plan' ? 'selected' : '' }}>Quarterly Plan</option>
                            <option value="Yearly Plan" {{ old('package_type') == 'Yearly Plan' ? 'selected' : '' }}>Yearly Plan</option>
                        </select>
                    </div>

                    <!-- Joining Date -->
                    <div>
                        <label class="block font-semibold text-sm text-gray-700 mb-1">Preferred Joining Date</label>
                        <input type="date" name="start_date" value="{{ old('start_date') }}" required 
                            class="w-full border border-gray-300 rounded-md p-2.5 focus:border-blue-500 focus:ring focus:ring-blue-200">
                    </div>

                    <!-- Note -->
                    <div>
                        <label class="block font-semibold text-sm text-gray-700 mb-1">Additional Note (Optional)</label>
                        <textarea name="note" rows="3" placeholder="Any specific requirements or queries..." 
                            class="w-full border border-gray-300 rounded-md p-2.5 focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('note') }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" 
                            class="w-full bg-blue-600 text-white font-bold py-3 rounded-md hover:bg-blue-700 transition duration-200 shadow-sm">
                            Submit Membership Application
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>