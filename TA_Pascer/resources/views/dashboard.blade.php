@extends('layouts.app')

@section('title', 'Pasar Cerdas - Beranda')

@section('content')

<div class="max-w-6xl mx-auto px-5 lg:px-8 py-6">

    <!-- Header Dashboard -->
    <div class="mb-6">

        <p class="text-sm text-slate-400">
            Selamat datang,
        </p>

        <h1 class="text-2xl font-bold text-slate-800">
            {{ $nama_pemilik }}
        </h1>

        <p class="text-sm text-slate-500">
            Kios {{ $nama_kios }} - {{ $lokasi }}
        </p>

    </div>


    <!-- SALDO -->
    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 p-6 mb-6">

        <div class="flex justify-between items-center">

            <div>

                <p class="text-sm text-slate-400">
                    Saldo Retribusi
                </p>

                <h2 class="text-3xl font-bold text-slate-800 mt-2">
                    Rp {{ number_format($saldo, 0, ',', '.') }}
                </h2>

            </div>

            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">

                <i class="ph-fill ph-wallet text-blue-600 text-2xl"></i>

            </div>

        </div>

    </div>


    <!-- TAGIHAN -->
    <div class="mb-8">

        <div class="flex justify-between items-center mb-4">

            <h2 class="text-lg font-bold text-slate-800">
                Tagihan Retribusi
            </h2>

            <a
                href="{{ route('pascer.tagihan') }}"
                class="text-sm text-blue-600 font-semibold"
            >
                Lihat Semua
            </a>

        </div>


        @forelse($tagihan as $data)

            @include('partials.tagihan-card', [
                'tagihan' => $data
            ])

        @empty

            <div class="bg-white rounded-2xl border border-slate-100 p-5">

                <p class="text-sm text-slate-400">
                    Tidak ada tagihan saat ini.
                </p>

            </div>

        @endforelse

    </div>


    <!-- RIWAYAT -->
    <div>

        <div class="flex justify-between items-center mb-4">

            <h2 class="text-lg font-bold text-slate-800">
                Riwayat Transaksi
            </h2>

            <a
                href="{{ route('pascer.history') }}"
                class="text-sm text-blue-600 font-semibold"
            >
                Lihat Semua
            </a>

        </div>


        <div class="bg-white rounded-2xl border border-slate-100 overflow-hidden">

            @if(count($riwayat_pembayaran) > 0)

                @foreach($riwayat_pembayaran as $riwayat)

                    <div class="p-4 border-b border-slate-100 last:border-b-0 flex justify-between items-center">

                        <div class="flex items-center gap-3">

                            <div class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center">

                                <i class="ph-fill ph-check-circle text-green-600 text-xl"></i>

                            </div>

                            <div>

                                <p class="text-sm font-bold text-slate-800">
                                    {{ $riwayat['jenis'] }}
                                </p>

                                <p class="text-xs text-slate-400">
                                    {{ $riwayat['tanggal'] }}
                                </p>

                            </div>

                        </div>

                        <div class="text-right">

                            <p class="text-sm font-bold text-slate-800">
                                -Rp {{ number_format($riwayat['nominal'], 0, ',', '.') }}
                            </p>

                            <p class="text-xs text-green-600">
                                {{ $riwayat['status'] }}
                            </p>

                        </div>

                    </div>

                @endforeach

            @else

                <div class="p-6 text-center">

                    <p class="text-sm text-slate-400">
                        Belum ada riwayat transaksi.
                    </p>

                </div>

            @endif

        </div>

    </div>

</div>

@endsection