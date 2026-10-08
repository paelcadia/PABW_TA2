@extends('layouts.app')

@section('title', 'Pasar Cerdas - Riwayat')

@section('content')

<div class="bg-slate-50 min-h-screen">

    <div class="bg-[#0060AF] rounded-b-[30px] pt-8 pb-32 px-6 shadow-lg relative overflow-hidden">

        <div class="absolute top-[-20px] right-[-20px] w-32 h-32 bg-white opacity-10 rounded-full"></div>
        <div class="absolute top-[60px] left-[-40px] w-24 h-24 bg-white opacity-10 rounded-full"></div>

        <div class="relative z-10 flex items-center justify-between text-white max-w-7xl mx-auto">

            <div class="flex items-center gap-3">

                <a
                    href="{{ route('pascer.dashboard') }}"
                    class="bg-white/20 hover:bg-white/30 p-2 rounded-full transition"
                >
                    <i class="ph-bold ph-arrow-left text-xl"></i>
                </a>

                <h1 class="text-xl font-bold tracking-tight">
                    Riwayat Transaksi
                </h1>

            </div>

            <button
                onclick="alert('Pilih tab di bawah untuk menyaring jenis transaksi')"
                class="bg-white/20 hover:bg-white/30 p-2 rounded-full transition"
            >
                <i class="ph-bold ph-funnel text-xl"></i>
            </button>

        </div>

    </div>


    <main class="px-5 -mt-20 relative z-20 pb-24 max-w-7xl mx-auto">

        <div class="bg-white rounded-2xl p-5 shadow-lg mb-6 border border-gray-100">

            <div class="flex items-center justify-between">

                <div class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center text-red-600">

                        <i class="ph-bold ph-trend-down text-xl"></i>

                    </div>

                    <div>

                        <p class="text-xs font-medium text-gray-500">
                            Pengeluaran Bulan Ini
                        </p>

                        <h2 class="text-xl font-bold text-gray-800 mt-0.5">
                            Rp {{ number_format($total_bulan_ini, 0, ',', '.') }}
                        </h2>

                    </div>

                </div>

                <a
                    href="{{ route('pascer.tagihan') }}"
                    class="text-[#0060AF] text-sm font-semibold flex items-center gap-1"
                >
                    Detail

                    <i class="ph-bold ph-caret-right text-base"></i>
                </a>

            </div>

        </div>


        <div class="flex gap-3 overflow-x-auto mb-5 py-1">

            <button
                onclick="filterTransactions('all', this)"
                class="filter-tab tab-active px-5 py-2.5 rounded-full text-sm whitespace-nowrap transition shadow-sm"
            >
                Semua
            </button>

            <button
                onclick="filterTransactions('retribusi', this)"
                class="filter-tab tab-inactive px-5 py-2.5 rounded-full text-sm whitespace-nowrap transition shadow-sm hover:bg-gray-50"
            >
                Retribusi
            </button>

            <button
                onclick="filterTransactions('topup', this)"
                class="filter-tab tab-inactive px-5 py-2.5 rounded-full text-sm whitespace-nowrap transition shadow-sm hover:bg-gray-50"
            >
                Top Up
            </button>

        </div>


        <div
            class="space-y-6"
            id="transactionList"
        >

            @forelse($transaksi_grouped as $tanggal_group => $list)

                <div class="date-group-container">

                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3 pl-1">
                        {{ $tanggal_group }}
                    </p>

                    <div class="space-y-3">

                        @foreach($list as $trx)

                            @include('partials.transaction-card', [
                                'trx' => $trx
                            ])

                        @endforeach

                    </div>

                </div>

            @empty

                <div class="bg-white p-8 rounded-2xl border border-gray-100 text-center shadow-sm text-gray-500">

                    <i class="ph ph-notepad text-4xl mb-2 text-gray-300"></i>

                    <p class="text-sm font-medium">
                        Belum ada transaksi pembayaran kios.
                    </p>

                </div>

            @endforelse

        </div>

    </main>

</div>


<script>

    function filterTransactions(category, element) {

        const tabs = document.querySelectorAll('.filter-tab');

        tabs.forEach(function(tab) {

            tab.className =
                'filter-tab tab-inactive px-5 py-2.5 rounded-full text-sm whitespace-nowrap transition shadow-sm hover:bg-gray-50';

        });

        element.className =
            'filter-tab tab-active px-5 py-2.5 rounded-full text-sm whitespace-nowrap transition shadow-sm';


        const items = document.querySelectorAll('.trx-item');

        items.forEach(function(item) {

            const itemCategory = item.getAttribute('data-category');

            if (category === 'all' || itemCategory === category) {

                item.classList.remove('hidden');

            } else {

                item.classList.add('hidden');

            }

        });


        const dateGroups = document.querySelectorAll('.date-group-container');

        dateGroups.forEach(function(group) {

            const visibleItems = group.querySelectorAll('.trx-item:not(.hidden)');

            if (visibleItems.length === 0) {

                group.classList.add('hidden');

            } else {

                group.classList.remove('hidden');

            }

        });

    }

</script>

@endsection