<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800">Admin Dashboard Panel</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
                    <p class="text-sm font-medium text-gray-500">Total Trainers</p>
                    <p class="text-3xl font-bold text-gray-800 mt-2">{{ $trainerCount ?? 0 }}</p>
                </div> 
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
                    <p class="text-sm font-medium text-gray-500">Total Facilities</p>
                    <p class="text-3xl font-bold text-gray-800 mt-2">{{ $facilityCount ?? 0 }}</p>
                </div> 
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
                    <p class="text-sm font-medium text-gray-500">Membership Requests</p>
                    <p class="text-3xl font-bold text-gray-800 mt-2">{{ $membershipCount ?? 0 }}</p>
                </div> 
            </div> 
            
            <div class="bg-white p-6 rounded-lg shadow-sm text-gray-900 border border-gray-200">
                <h3 class="text-lg font-bold">Welcome back, {{ Auth::user()->name }}!</h3>
                <p class="mt-2 text-gray-600">Manage gym operations, trainers records, and membership requests from this admin panel.</p> 
            </div> 
        </div> 
    </div> 
</x-app-layout>