<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800">Add Facility</h2>
    </x-slot>
   
    <div class="py-8">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            
            {{-- Validation Errors Show Koranor Jonno (Jate error bujte subidha hoy) --}}
            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block font-semibold text-sm">Facility Title</label>
                    {{-- name="name"-er bodole ekhane name="title" kora holo --}}
                    <input type="text" name="title" value="{{ old('title') }}" required class="w-full border border-gray-300 rounded-md mt-1 p-2">
                </div>

                <div>
                    <label class="block font-semibold text-sm">Description</label>
                    <textarea name="description" rows="4" required class="w-full border border-gray-300 rounded-md mt-1 p-2">{{ old('description') }}</textarea>
                </div>

                <div>
                    <label class="block font-semibold text-sm">Image</label>
                    <input type="file" name="image" class="mt-1">
                </div>

                <button type="submit" class="bg-blue-500 text-white font-bold px-6 py-2.5 rounded-md hover:bg-blue-600">Save Facility</button>
            </form>
        </div>
    </div>
</x-app-layout>