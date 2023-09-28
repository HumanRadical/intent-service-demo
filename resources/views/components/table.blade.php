@props(['intents'])

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                    Intent
                </th>
                <th scope="col" class="px-6 py-3">
                    Parent
                </th>
                <th scope="col" class="px-6 py-3">
                    Children
                </th>
                <th scope="col" class="px-6 py-3">
                    Outcome
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($intents as $intent)
                <tr class="bg-{{ $loop->iteration % 2 === 0 ? "gray-50" : "white" }} border-b dark:bg-gray-900 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $intent->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <time>{{ $intent->created_at->format('M d, h:iA T') }}</time>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $intent->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($intent->parent)
                            <a href="/intent/{{ $intent->parent->id }}" class="hover:underline">{{ $intent->parent->name }}</a>
                        @else 
                            <span class="text-gray-300">N/A</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ count($intent->children) }}
                    </td>
                    <td class="px-6 py-4 text-{{ $intent->successful ? "green" : "red" }}-500 whitespace-nowrap">
                        {{ $intent->successful ? "✓ Success" : "✕ Declined" }}
                    </td>
                    <td class="px-6 py-4 w-4 whitespace-nowrap">
                        <a class="hover:underline text-blue-500" href="/intent/{{ $intent->id }}">Details...</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>