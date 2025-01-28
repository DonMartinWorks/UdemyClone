<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Links -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <h1 class="bg-purple-600 text-white text-center p-2 text-lg">Tailwind CSS</h1>

    <div x-data="{ open: false }">
        <button @click="open = !open">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>

    <div class="text-center">
        <h1 class="text-primary">Estilo h1: primary</h1>
        <h2 class="text-primary-light">Estilo h2: primary light</h2>
        <h3 class="text-udemy">Estilo h3: udemy</h3>
        <h4 class="text-udemy-light">Estilo h4: udemy light</h4>
        <h5 class="text-udemy-dark">Estilo h5: udemy dark</h5>
        <h6 class="text-rose-600">Estilo h6</h6>

        <div class="max-w-8xl">max w 8xl</div>
    </div>
</body>

</html>
