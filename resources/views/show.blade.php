<x-layout>
    <div class="flex gap-4 text-2xl">
        <a class="my-auto font-semibold border-2 border-black rounded-full px-1" href="/">&#8592;</a>
        <h2 class="font-bold">{{ $intent->name }}</h2>
    </div>
    <div class="mt-4 text-lg space-y-1">
        <h4><strong class="font-semibold">ID:</strong> {{ $intent->id }}</h4>
        <h4><strong class="font-semibold">Date:</strong> {{ $intent->created_at->format('F d, Y, h:iA T') }}</h4>
        <h4><strong class="font-semibold">Parent:</strong> Parent</h4>
        <h4 class="text-{{ $intent->successful ? "green" : "red" }}-500"><strong class="font-semibold text-black">Outcome:</strong> {{ $intent->successful ? "✓ Success" : "✕ Declined" }}</h4>
        <h4><strong class="font-semibold">Donor:</strong></h4>
        <h4 class="ml-8"><strong class="font-semibold">Name:</strong> {{ $intent->user->name }}</h4>
        <h4 class="ml-8"><strong class="font-semibold">Email:</strong> {{ $intent->user->email }}</h4>
        <h4><strong class="font-semibold">App:</strong> iOS v5.19.0</h4>
        <h4><strong class="font-semibold">OS:</strong> iOS v5.8</h4>
        <h4><strong class="font-semibold">IP:</strong> 172.29.86.12</h4>
        <h4><strong class="font-semibold">Longitude:</strong> 80°01'28.3"W</h4>
        <h4><strong class="font-semibold">Latitude:</strong> 43°38'25.4"N</h4>
        <img class="border-2 border-black w-3/5" src="http://localhost:8000/images/google_maps.png" alt="Google Maps">
    </div>
    <div class="w-4/5 mx-auto mt-10">
        <div class="flex justify-between mx-6">
            <h3 class="font-semibold text-2xl">Children:</h3>
            <a class="my-auto text-lg text-gray-600 hover:underline" href="/">View Full</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Donor ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Donor Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Donor Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Intent
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Parent
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Outcome
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $intent->id }}
                        </th>
                        <td class="px-6 py-4">
                            <time>{{ $intent->created_at->format('M d, h:iA T') }}</time>
                        </td>
                        <td class="px-6 py-4">
                            {{ $intent->user->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $intent->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $intent->user->email }}
                        </td>
                        <td class="px-6 py-4">
                                <a href="/intent/{{ $intent->id }}">
                                    {{ $intent->name }}
                                </a>
                            </td>
                        <td class="px-6 py-4">
                            <a class="hover:underline">Parent</a>
                        </td>
                        <td class="px-6 py-4 text-{{ $intent->successful ? "green" : "red" }}-500">
                            {{ $intent->successful ? "✓ Success" : "✕ Declined" }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>