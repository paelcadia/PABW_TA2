<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Pasar Cerdas')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'bca-dark': '#003D79',
                        'bca-main': '#0060AF',
                        'bca-light': '#E5F3FF',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
    </style>

    @yield('styles')
</head>

<body>

    <!-- HEADER -->
    <header class="bg-[#0060AF] text-white sticky top-0 z-50 shadow-md">
        <div class="max-w-6xl mx-auto px-6 py-4">

            <div class="flex items-center justify-between">

                <a href="{{ route('pascer.dashboard') }}" class="flex items-center gap-3">
                    <img
                        src="{{ asset('Asset/img/PASAR CERDAS LOGO.png') }}"
                        alt="Pasar Cerdas"
                        class="w-10 h-10 object-contain bg-white rounded-full p-1"
                    >

                    <span class="font-bold text-lg">
                        Pasar Cerdas
                    </span>
                </a>

                <div class="flex items-center gap-4">

                    <a
                        href="{{ route('pascer.dashboard') }}"
                        class="text-sm hover:text-blue-100"
                    >
                        Beranda
                    </a>

                    <a
                        href="{{ route('pascer.tagihan') }}"
                        class="text-sm hover:text-blue-100"
                    >
                        Tagihan
                    </a>

                    <a
                        href="{{ route('pascer.history') }}"
                        class="text-sm hover:text-blue-100"
                    >
                        Riwayat
                    </a>

                    <a
                        href="{{ route('pascer.kiosku') }}"
                        class="text-sm hover:text-blue-100"
                    >
                        KiosKu
                    </a>

                </div>

            </div>

        </div>
    </header>

    <!-- CONTENT -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-gray-200 mt-10">
        <div class="max-w-6xl mx-auto px-6 py-5 text-center">

            <p class="text-sm text-gray-500">
                © 2026 Pasar Cerdas - Sistem Pembayaran Retribusi Pasar
            </p>

        </div>
    </footer>

    @yield('scripts')

</body>
</html>