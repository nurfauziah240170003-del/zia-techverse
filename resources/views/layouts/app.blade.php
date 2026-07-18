<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zia TechVerse') }}</title>

    <!-- Google Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #020617;
            color: white;
        }

        /* Scrollbar */

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(
                to bottom,
                #2563eb,
                #7c3aed
            );
            border-radius: 999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(
                to bottom,
                #3b82f6,
                #8b5cf6
            );
        }

        /* Efek transisi */

        a,
        button,
        img,
        div {
            transition: all 0.3s ease;
        }

        /* Efek hover kartu */

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased bg-slate-950">

    <div class="min-h-screen bg-slate-950">

        @include('layouts.navigation')

        @isset($header)

            <header class="bg-slate-900 border-b border-slate-800 shadow-lg">

                <div class="max-w-7xl mx-auto py-6 px-6">

                    {{ $header }}

                </div>

            </header>

        @endisset

        <main class="bg-slate-950">

            {{ $slot }}

        </main>

    </div>

    <!-- SweetAlert -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>