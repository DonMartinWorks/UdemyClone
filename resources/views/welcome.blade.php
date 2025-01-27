<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Links -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1 class="bg-purple-600 text-white text-center p-2 text-lg">Tailwind CSS</h1>

    <div x-data="{ open: false }">
        <button @click="open = !open">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>
</body>

</html>
