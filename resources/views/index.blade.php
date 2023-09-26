<x-layout>
    <form class="flex justify-center gap-4 mb-6" action="/">
        <input 
            class="border border-gray-500 rounded-md w-80 px-2 py-1" 
            type="text" 
            name="search"
            placeholder="Search..." />
        <input 
            class="border border-gray-500 rounded-md px-2 py-1" 
            name="date"
            type="date" />
        <button class="border border-gray-500 bg-gray-200 rounded-md px-3 py-1">Search</button>
    </form>
    <x-table :intents="$intents" />
</x-layout>