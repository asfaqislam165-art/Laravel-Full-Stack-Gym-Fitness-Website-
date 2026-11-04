<x-app-layout>
    <x-slot name="header"><h2 class="font-bold text-xl text-gray-800">Update Facility</h2></x-slot>
    <div class="py-8">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <form action="{{ route('admin.facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
   
                
                <div>
                    <label class="block font-semibold text-sm">Facility Title</label>
                    <input type="text" name="title" value="{{ old('title', $facility->title) }}" required class="w-full border border-gray-300 rounded-md mt-1 p-2">
                </div>

                <div>
                    <label class="block font-semibold text-sm">Description</label>
                    <textarea name="description" rows="4" required class="w-full border border-gray-300 rounded-md mt-1 p-2">{{ old('description', $facility->description) }}</textarea>
                </div>

                <div>
                    <label class="block font-semibold text-sm">Current Image</label>
                    @if($facility->image)
                        <img src="{{ asset('img/'.$facility->image) }}" class="w-16 h-16 object-cover rounded mt-1">
                    @endif
                    <input type="file" name="image" class="mt-2">
                </div>

                <button type="submit" class="bg-blue-500 text-white font-bold px-6 py-2.5 rounded-md hover:bg-blue-600">Update Facility</button>
            </form>
        </div>
    </div>
</x-app-layout>