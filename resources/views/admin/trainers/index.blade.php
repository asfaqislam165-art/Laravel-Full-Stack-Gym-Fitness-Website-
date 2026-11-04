<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-xl text-gray-800">Gym Trainers Management</h2>
            <a href="{{ route('admin.trainers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md font-semibold text-sm hover:bg-blue-600">
                + Add New Trainer
            </a>
        </div>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-6">
                @if(session('status'))
                    <div class="mb-4 p-3 bg-blue-500 text-white rounded font-medium">{{ session('status') }}</div>
                @endif

                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="px-4 py-3 text-left">Photo</th>
                            <th class="px-4 py-3 text-left">Name</th>
                            <th class="px-4 py-3 text-left">Speciality</th>
                            <th class="px-4 py-3 text-left">Phone</th>
                            <th class="px-4 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($trainers as $trainer)
                            <tr>
                                <td class="px-4 py-3">
                                    @if($trainer->image)
                                        <img src="{{ asset('img/'.$trainer->image) }}" class="w-10 h-10 object-cover rounded-full">
                                    @else
                                        <span class="text-gray-400">N/A</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 font-bold">{{ $trainer->name }}</td>
                                <td class="px-4 py-3 text-blue-500 font-medium">{{ $trainer->speciality }}</td>
                                <td class="px-4 py-3">{{ $trainer->phone ?? 'N/A' }}</td>
                                <td class="px-4 py-3 space-x-3">
                                    <a href="{{ route('admin.trainers.edit', $trainer->id) }}" class="text-blue-500 font-bold hover:underline"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <a href="{{ route('admin.trainers.destroy', $trainer->id) }}" onclick="return confirm('Delete trainer?');" class="text-red-600 font-bold hover:underline">Delete <i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>