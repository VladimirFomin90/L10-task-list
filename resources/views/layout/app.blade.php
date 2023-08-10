<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- blade-formatter-disabled --}}
    <style type="text/tailwindcss">
        .btn {
            @apply bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline my-4
        }

        label {
            @apply block uppercase text-slate-700 mb-2
        }

        input, textarea {
            @apply border w-full leading-tight py-2 px-2 focus:outline-none
        }

        .error {
            @apply text-red-500 text-xs
        }
    </style>
    {{-- blade-formatter-enable --}}

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
