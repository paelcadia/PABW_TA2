@php
    $is_success = $trx['status'] === 'Berhasil';
    $is_topup = $trx['kategori'] === 'topup';

    if ($is_topup) {
        $icon_class = 'ph-fill ph-wallet';
        $icon_bg = 'bg-green-50 text-green-600';
        $operator = '+';
        $nominal_color = 'text-green-600';
    } else {
        $icon_class = $is_success
            ? 'ph-fill ph-receipt'
            : 'ph-fill ph-shield-warning';

        $icon_bg = $is_success
            ? 'bg-blue-50 text-[#0060AF]'
            : 'bg-red-50 text-red-500';

        $operator = '-';
        $nominal_color = 'text-gray-800';
    }
@endphp

<a
    href="{{ route('pascer.history.detail', $trx['id']) }}"
    data-category="{{ $trx['kategori'] }}"
    class="trx-item block bg-white p-4 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition"
>

    <div class="flex justify-between items-start">

        <div class="flex items-center gap-3">

            <div class="w-12 h-12 rounded-xl {{ $icon_bg }} flex items-center justify-center shrink-0">

                <i class="{{ $icon_class }} text-2xl"></i>

            </div>

            <div>

                <h3 class="text-sm font-bold text-gray-800">
                    {{ $trx['judul'] }}
                </h3>

                <p class="text-xs text-gray-500 mt-1">
                    {{ date('H:i', strtotime($trx['tanggal_raw'])) }}
                    WIB •
                    {{ $trx['metode'] }}
                </p>

            </div>

        </div>


        <div class="text-right">

            <p class="text-sm font-bold {{ $nominal_color }}">

                {{ $operator }}Rp
                {{ number_format($trx['nominal'], 0, ',', '.') }}

            </p>


            @if($trx['status'] === 'Berhasil')

                <span class="text-[10px] font-bold text-green-600 bg-green-50 px-2 py-0.5 rounded-full mt-1 inline-block">
                    Berhasil
                </span>

            @else

                <span class="text-[10px] font-bold text-red-500 bg-red-50 px-2 py-0.5 rounded-full mt-1 inline-block">
                    Gagal
                </span>

            @endif

        </div>

    </div>

</a>