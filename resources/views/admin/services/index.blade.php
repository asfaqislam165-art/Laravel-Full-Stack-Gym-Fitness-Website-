<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-xl text-gray-800">Manage Services</h2>
            <a href="{{ route('admin.services.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md font-semibold text-sm hover:bg-blue-600">
                + Add New Service
            </a>
        </div>
    </x-slot>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm">
                @if(session('status'))
                    <div class="mb-4 p-3 bg-blue-500 text-white rounded font-medium">{{ session('status') }}</div>
                @endif
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-4 py-3 text-left">Image</th>
                            <th class="px-4 py-3 text-left">Title</th>
                            <th class="px-4 py-3 text-left">Description</th>
                            <th class="px-4 py-3 text-left">Price</th> <!-- Added Price Header -->
                            <th class="px-4 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($services as $service)
                            <tr>
                                <td class="px-4 py-3">
                                    @if($service->image)
                                        <img src="{{ asset('img/'.$service->image) }}" class="w-10 h-10 object-cover rounded">
                                    @else
                                        <span class="text-gray-400">N/A</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 font-bold">{{ $service->title }}</td>
                                <td class="px-4 py-3 text-gray-600">{{ Str::limit($service->description, 50) }}</td>
                                <td class="px-4 py-3 font-bold text-blue-500">{{ $service->price ?? 'Free' }}</td> <!-- Added Price Data -->
                                <td class="px-4 py-3 space-x-2">
                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="text-blue-500 font-bold hover:underline"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <a href="{{ route('admin.services.destroy', $service->id) }}" onclick="return confirm('Delete service?');" class="text-red-600 font-bold hover:underline">Delete <i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>