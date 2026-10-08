<div class="bg-white rounded-2xl border border-red-100 p-5">

    <div class="flex items-center gap-4">

        <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center">

            <i class="ph-fill ph-receipt text-red-500 text-2xl"></i>

        </div>


        <div class="flex-1">

            <p class="font-bold text-slate-800">
                {{ $tagihan['jenis'] }}
            </p>

            <p class="text-xs text-red-500 mt-1">
                Jatuh Tempo:
                {{ $tagihan['jatuh_tempo'] }}
            </p>

        </div>


        <div class="text-right">

            <p class="font-bold text-slate-800">
                Rp {{ number_format($tagihan['nominal'], 0, ',', '.') }}
            </p>

            @if($tagihan['status'] == 'Belum Dibayar')

                <a
                    href="{{ route('pascer.pembayaran') }}"
                    class="inline-block mt-2 bg-red-600 text-white text-xs font-bold px-4 py-2 rounded-lg"
                >
                    Bayar
                </a>

            @else

                <span class="inline-block mt-2 text-xs text-green-600 font-semibold">
                    Sudah Dibayar
                </span>

            @endif

        </div>

    </div>

</div>