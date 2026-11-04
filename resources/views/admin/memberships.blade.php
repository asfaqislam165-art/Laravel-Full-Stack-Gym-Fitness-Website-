<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800">Gym Membership Applications</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm">
                @if(session('status'))
                    <div class="mb-4 p-3 bg-blue-500 text-white rounded font-medium">{{ session('status') }}</div>
                @endif

                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-4 py-3 text-left">Member Name</th>
                            <th class="px-4 py-3 text-left">Phone</th>
                            <th class="px-4 py-3 text-left">Package</th>
                            <th class="px-4 py-3 text-left">Joining Date</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($memberships as $app)
                            <tr>
                                <td class="px-4 py-3 font-bold">{{ $app->member_name }}</td>
                                <td class="px-4 py-3">{{ $app->phone }}</td>
                                <td class="px-4 py-3 text-blue-500 font-bold">{{ $app->package_type }}</td>
                                <td class="px-4 py-3">{{ $app->start_date }}</td>
                                <td class="px-4 py-3">
                                    <form action="{{ route('admin.memberships.status', $app->id) }}" method="POST">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()" class="text-xs border-gray-300 rounded font-semibold">
                                            <option value="Pending" {{ $app->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Approved" {{ $app->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="Cancelled" {{ $app->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('admin.memberships.destroy', $app->id) }}" onclick="return confirm('Are you sure you want to delete this membership?');" class="text-red-600 font-bold hover:underline">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-4 text-center text-gray-500 font-medium">
                                    No membership applications found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>