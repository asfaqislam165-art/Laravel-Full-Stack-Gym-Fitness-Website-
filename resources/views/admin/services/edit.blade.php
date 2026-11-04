<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800">Edit Service</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block font-semibold text-sm">Service Title</label>
                    <input type="text" name="title" value="{{ $service->title }}" required class="w-full border border-gray-300 rounded-md mt-1 p-2">
                </div>

                <div>
                    <label class="block font-semibold text-sm">Description</label>
                    <textarea name="description" rows="4" required class="w-full border border-gray-300 rounded-md mt-1 p-2">{{ $service->description }}</textarea>
                </div>

                <div>
                    <label class="block font-semibold text-sm">Price</label>
                    <input type="text" name="price" value="{{ $service->price }}" class="w-full border border-gray-300 rounded-md mt-1 p-2">
                </div>

                <div>
                    <label class="block font-semibold text-sm">Current Image</label>
                    @if($service->image)
                        <img src="{{ asset('img/'.$service->image) }}" class="w-16 h-16 object-cover rounded mt-1 mb-2">
                    @else
                        <p class="text-xs text-gray-400 mt-1 mb-2">No image uploaded</p>
                    @endif
                    <label class="block font-semibold text-sm">Change Image (Optional)</label>
                    <input type="file" name="image" class="mt-1">
                </div>

                <button type="submit" class="bg-blue-500 text-white font-bold px-6 py-2.5 rounded-md hover:bg-blue-600">Update Service</button>
            </form>
        </div>
    </div>
</x-app-layout>