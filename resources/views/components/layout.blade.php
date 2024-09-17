<html>
<head>
    <title>{{ $title ?? 'Clients' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-blue-900">
    <h1 class="text-white text-center p-4">{{ $title ?? 'CLIENTS' }}</h1>
</header>
<main class="container mx-auto p-4 max-w-3xl">
    @if (session('success'))
        <div id="alert" class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg relative" role="alert">
            {{ session('success') }}
            <button type="button" class="text-lg absolute top-1 right-3 text-green-700" onclick="closeAlert()">
                &times;
            </button>
        </div>
    @endif
    {{ $slot }}
</main>

@vite('resources/js/app.js')
</body>
</html>
