<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 10 Task List App</title>
    @yield('styles')
</head>
<body class="container mx-auto my-10 max-w-xl">
    <h1 class="font-bold text-2xl">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
      <div>{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

</body>
</html>
