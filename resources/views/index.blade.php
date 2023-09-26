<x-layout>
    <h1 class="text-center text-4xl font-semibold">Intent Service</h1>
    <div class="border rounded-xl w-2/3 p-6 mx-auto mt-4">
        <form class="flex justify-center gap-4" action="/">
            <input class="border border-gray-500 rounded-md w-80 px-2 py-1" type="text" placeholder="Search...">
            <input class="border border-gray-500 rounded-md px-2 py-1" type="date">
            <button class="border border-gray-500 bg-gray-200 rounded-md px-3 py-1">Search</button>
        </form>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
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
                    @foreach ($intents as $intent)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $intent->id }}
                            </th>
                            <td class="px-6 py-4">
                                <time>{{ $intent->created_at->format('F d, h:ma') }}</time>
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
                                {{ $intent->name }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="hover:underline">Parent</a>
                            </td>
                            <td class="px-6 py-4 text-{{ $intent->successful ? "green" : "red" }}-500">
                                {{ $intent->successful ? "✓ Success" : "✕ Declined" }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>