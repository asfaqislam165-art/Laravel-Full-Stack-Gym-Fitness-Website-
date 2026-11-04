<x-app-layout>
    <x-slot name="header"><h2 class="font-bold text-xl text-gray-800">Add New Service</h2></x-slot>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <div class="py-8">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-semibold text-sm">Service Title</label>
                    <input type="text" name="title" required class="w-full border border-gray-300 rounded-md mt-1 p-2">
                </div>
                <div>
                    <label class="block font-semibold text-sm">Description</label>
                    <textarea name="description" rows="4" required class="w-full border border-gray-300 rounded-md mt-1 p-2"></textarea>
                </div>
                <div>
                    <label class="block font-semibold text-sm">Price (e.g., $50/mo or ৳500/Month)</label>
                    <input type="text" name="price" placeholder="e.g. ৳1000/Month" class="w-full border border-gray-300 rounded-md mt-1 p-2">
                </div>
                <div>
                    <label class="block font-semibold text-sm">Image</label>
                    <input type="file" name="image" class="mt-1">
                </div>
                <button type="submit" class="bg-blue-500 text-white font-bold px-6 py-2.5 rounded-md hover:bg-blue-600">Save Service</button>
            </form>
        </div>
    </div>
</x-app-layout>