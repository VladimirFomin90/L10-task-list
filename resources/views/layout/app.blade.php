<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

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
<div x-data="{ flash: true }">
    @if (session()->has('success'))
        <div x-show="flash"
             class="relative my-8 rounded border border-green-400 bg-green-100 py-2 flex justify-center flex-col items-center"
             role="alert">
            <strong class="font-bold block">Success!</strong>
            <div>{{ session('success') }}</div>

            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
             class="cursor-pointer" @click="flash = false" x-transition>
        <path
            d="M16 8L8 16M8.00001 8L16 16M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
            stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </span>
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>
