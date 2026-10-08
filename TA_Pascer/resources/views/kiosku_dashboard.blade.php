@extends('layouts.app')

@section('title', 'Pasar Cerdas - KiosKu')

@section('content')

<div class="bg-slate-50 min-h-screen">

    <header class="bg-[#0060AF] rounded-b-[30px] relative overflow-hidden">

        <div class="absolute top-[-50px] right-[-50px] w-[150px] h-[150px] bg-white/10 rounded-full"></div>

        <div class="max-w-md mx-auto relative z-10">

            <div class="flex items-center justify-between text-white p-4 py-5">

                <div class="flex items-center gap-3">

                    <a
                        href="{{ route('pascer.dashboard') }}"
                        class="bg-white/20 hover:bg-white/30 p-2 rounded-full transition"
                    >
                        <i class="ph-bold ph-arrow-left text-xl"></i>
                    </a>

                    <h1 class="text-xl font-bold tracking-tight">
                        Dashboard KiosKU
                    </h1>

                </div>

                <a
                    href="{{ route('pascer.kiosku.edit') }}"
                    class="bg-white/20 hover:bg-white/30 p-2 rounded-xl transition flex items-center gap-2 text-sm font-semibold"
                >
                    <i class="ph-bold ph-pencil-simple-line text-lg"></i>

                    <span class="hidden sm:inline">
                        Edit Kios
                    </span>
                </a>

            </div>

        </div>

    </header>


    <main class="max-w-md mx-auto p-4 space-y-5 pb-24">


        <section class="bg-white p-4 rounded-2xl shadow-lg border border-gray-100">

            <h2 class="text-base font-bold text-[#003D79] flex items-center gap-2 mb-2">

                <i class="ph-bold ph-storefront text-lg text-[#0060AF]"></i>

                Lapak Aktif

            </h2>


            <div class="space-y-1 text-sm text-gray-700">

                <div class="flex justify-between border-b border-dashed border-gray-100 py-2">

                    <span class="font-medium text-gray-500 text-xs">
                        Nama Lapak
                    </span>

                    <span class="font-semibold text-gray-800 text-sm">
                        Kios Sembako {{ $kios['nama'] }}
                    </span>

                </div>


                <div class="flex justify-between border-b border-dashed border-gray-100 py-2">

                    <span class="font-medium text-gray-500 text-xs">
                        ID Lapak / Lokasi
                    </span>

                    <span class="font-semibold text-gray-800 text-sm">
                        {{ $kios['id'] }} / {{ $kios['lokasi'] }}
                    </span>

                </div>


                <div class="flex justify-between py-2">

                    <span class="font-medium text-gray-500 text-xs">
                        Status Lapak
                    </span>

                    <span class="font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full text-xs">
                        Aktif
                    </span>

                </div>

            </div>

        </section>


        <section class="space-y-3">

            <h2 class="text-base font-bold text-[#003D79] flex items-center gap-2">

                <i class="ph-bold ph-chart-bar text-lg text-[#0060AF]"></i>

                Ringkasan Keuangan Kios

            </h2>


            <div class="grid grid-cols-2 gap-3">


                <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100 border-t-4 border-green-500">

                    <div class="flex items-center justify-between">

                        <i class="ph-bold ph-trend-up text-2xl text-green-500"></i>

                        <span class="text-[10px] font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">
                            PEMASUKAN
                        </span>

                    </div>

                    <p class="text-lg font-extrabold text-gray-800 mt-2">
                        Rp {{ number_format($total_pemasukan, 0, ',', '.') }}
                    </p>

                    <p class="text-[10px] text-gray-500 mt-1">
                        Total Penjualan Kotor
                    </p>

                </div>


                <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100 border-t-4 border-red-500">

                    <div class="flex items-center justify-between">

                        <i class="ph-bold ph-trend-down text-2xl text-red-500"></i>

                        <span class="text-[10px] font-semibold text-red-600 bg-red-50 px-2 py-1 rounded-full">
                            PENGELUARAN
                        </span>

                    </div>

                    <p class="text-lg font-extrabold text-gray-800 mt-2">
                        Rp {{ number_format($total_pengeluaran, 0, ',', '.') }}
                    </p>

                    <p class="text-[10px] text-gray-500 mt-1">
                        Total Biaya Retribusi
                    </p>

                </div>


                <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100 border-t-4 border-blue-500">

                    <div class="flex items-center justify-between">

                        <i class="ph-bold ph-arrows-clockwise text-2xl text-blue-500"></i>

                        <span class="text-[10px] font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">
                            TRANSAKSI
                        </span>

                    </div>

                    <p class="text-lg font-extrabold text-gray-800 mt-2">
                        {{ $total_transaksi }}
                    </p>

                    <p class="text-[10px] text-gray-500 mt-1">
                        Total Transaksi Kios
                    </p>

                </div>


                <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100 border-t-4 border-[#003D79]">

                    <div class="flex items-center justify-between">

                        <i class="ph-bold ph-currency-circle-dollar text-2xl text-[#003D79]"></i>

                        <span class="text-[10px] font-semibold text-[#003D79] bg-[#E5F3FF] px-2 py-1 rounded-full">
                            LABA BERSIH
                        </span>

                    </div>

                    <p class="text-lg font-extrabold text-gray-800 mt-2">
                        Rp {{ number_format($laba_bersih, 0, ',', '.') }}
                    </p>

                    <p class="text-[10px] text-gray-500 mt-1">
                        Pemasukan - Retribusi
                    </p>

                </div>

            </div>

        </section>


        <section>

            <div class="flex justify-between items-center mb-3">

                <h2 class="text-base font-bold text-[#003D79] flex items-center gap-2">

                    <i class="ph-bold ph-list-dashes text-lg text-[#0060AF]"></i>

                    Transaksi Terakhir

                </h2>


                <a
                    href="{{ route('pascer.history') }}"
                    class="text-xs font-medium text-[#0060AF] hover:text-[#003D79] transition"
                >
                    Lihat Semua

                    <i class="ph-bold ph-caret-right text-xs"></i>
                </a>

            </div>


            <div class="space-y-3">

                @forelse($transaksi_list as $trx)

                    @php
                        $is_pemasukan = $trx['tipe'] === 'pemasukan';

                        $icon_bg = $is_pemasukan
                            ? 'bg-green-50 text-green-600'
                            : 'bg-red-50 text-red-600';

                        $icon_type = $is_pemasukan
                            ? 'ph-plus'
                            : 'ph-minus';

                        $prefix_operator = $is_pemasukan
                            ? '+'
                            : '-';

                        $nominal_color = $is_pemasukan
                            ? 'text-green-600'
                            : 'text-red-600';
                    @endphp


                    <a
                        href="{{ route('pascer.history.detail', $trx['id']) }}"
                        class="block bg-white p-3 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition"
                    >

                        <div class="flex justify-between items-start">

                            <div class="flex items-center gap-3">

                                <div class="w-9 h-9 rounded-lg {{ $icon_bg }} flex items-center justify-center">

                                    <i class="ph-fill {{ $icon_type }} text-lg"></i>

                                </div>


                                <div>

                                    <h3 class="text-sm font-bold text-gray-800">
                                        {{ $trx['judul'] }}
                                    </h3>

                                    <p class="text-xs text-gray-500 mt-0.5">
                                        {{ $trx['tanggal'] }}
                                    </p>

                                    <p class="text-[10px] text-gray-400 mt-0.5">
                                        {{ $trx['metode'] }}
                                    </p>

                                </div>

                            </div>


                            <div class="text-right">

                                <p class="text-sm font-bold {{ $nominal_color }}">

                                    {{ $prefix_operator }}Rp
                                    {{ number_format($trx['nominal'], 0, ',', '.') }}

                                </p>


                                @if($trx['tipe'] === 'pemasukan')

                                    <span class="text-[10px] font-bold text-green-600 bg-green-50 px-2 py-0.5 rounded-full mt-1 inline-block">
                                        Pemasukan
                                    </span>

                                @else

                                    <span class="text-[10px] font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded-full mt-1 inline-block">
                                        Pengeluaran
                                    </span>

                                @endif

                            </div>

                        </div>

                    </a>

                @empty

                    <div class="bg-white p-5 rounded-xl text-center border border-gray-100">

                        <p class="text-sm text-gray-400">
                            Belum ada transaksi.
                        </p>

                    </div>

                @endforelse

            </div>

        </section>

    </main>

</div>

@endsection