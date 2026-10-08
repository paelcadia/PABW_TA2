<nav class="bg-[#0060AF] text-white">

    <div class="max-w-6xl mx-auto px-6 py-3 flex items-center gap-6">

        <a
            href="{{ route('pascer.dashboard') }}"
            class="text-sm font-semibold hover:text-blue-100"
        >
            Beranda
        </a>

        <a
            href="{{ route('pascer.tagihan') }}"
            class="text-sm font-semibold hover:text-blue-100"
        >
            Tagihan
        </a>

        <a
            href="{{ route('pascer.history') }}"
            class="text-sm font-semibold hover:text-blue-100"
        >
            Riwayat
        </a>

        <a
            href="{{ route('pascer.kiosku') }}"
            class="text-sm font-semibold hover:text-blue-100"
        >
            KiosKu
        </a>

        <a
            href="{{ route('pascer.notification') }}"
            class="text-sm font-semibold hover:text-blue-100"
        >
            Notifikasi
        </a>

    </div>

</nav>