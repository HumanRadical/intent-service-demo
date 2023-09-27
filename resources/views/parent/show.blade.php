<x-layout>
    <div class="flex text-3xl mb-6">
        <a class="my-auto font-semibold border-2 border-black rounded-full px-1" href="/">&#8592;</a>
        <h2 class="mx-auto my-auto font-bold">{{ $parent->name }}</h2>
    </div>
    <x-table :intents="$parent->intents" />
</x-layout>