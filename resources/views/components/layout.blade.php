<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <main>
        <img class="w-32 m-3" src="https://asset.brandfetch.io/id0rDTn4Db/idSk_YIsHP.png" alt="Givelify">
        <h1 class="text-center text-4xl font-semibold">Intent Service</h1>
        <section>
            {{ $slot }}
        </section>
    </main>
</body>