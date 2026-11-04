<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800">My Membership Status</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-gray-200 p-6 rounded-xl shadow-sm">
                <h3 class="text-lg font-bold mb-4">Your Membership Records</h3>
                @if($myMemberships->isEmpty())
                    <p class="text-gray-600 text-sm">You haven't applied for any membership plan yet. <a href="{{ route('membership') }}" class="text-blue-500 font-bold underline">Apply for membership</a>.</p>
                @else
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th class="px-4 py-3 text-left">Package</th>
                                <th class="px-4 py-3 text-left">Joining Date</th>
                                <th class="px-4 py-3 text-left">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($myMemberships as $item)
                                <tr>
                                    <td class="px-4 py-3 font-bold">{{ $item->package_type }}</td>
                                    <td class="px-4 py-3">{{ $item->start_date }}</td>
                                    <td class="px-4 py-3">
                                        <span class="px-2.5 py-1 text-xs font-bold rounded text-white @if($item->status=='Approved') bg-green-500 @elseif($item->status=='Cancelled') bg-red-500 @else bg-yellow-500 @endif">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>