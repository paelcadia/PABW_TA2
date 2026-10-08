@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')

<div class="max-w-2xl mx-auto px-5 py-6">

    <div class="flex items-center gap-3 mb-6">

        <a
            href="{{ route('pascer.history') }}"
            class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-600 hover:bg-slate-50"
        >
            <i class="ph-bold ph-arrow-left text-xl"></i>
        </a>

        <div>
            <h1 class="text-xl font-bold text-slate-800">
                Detail Transaksi
            </h1>

            <p class="text-xs text-slate-400">
                Informasi pembayaran retribusi
            </p>
        </div>

    </div>


    <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">

        <div class="bg-[#0060AF] text-white text-center px-6 py-8">

            <div class="w-16 h-16 mx-auto bg-white/20 rounded-full flex items-center justify-center mb-4">

                <i class="ph-fill ph-check-circle text-4xl"></i>

            </div>

            <p class="text-sm opacity-80">
                Status Pembayaran
            </p>

            @if($riwayat['status'] === 'Berhasil')

                <h2 class="text-2xl font-bold mt-1">
                    Pembayaran Berhasil
                </h2>

            @else

                <h2 class="text-2xl font-bold mt-1">
                    Pembayaran Gagal
                </h2>

            @endif

        </div>


        <div class="p-6">

            <div class="text-center mb-8">

                <p class="text-sm text-slate-400">
                    Total Pembayaran
                </p>

                <h2 class="text-3xl font-extrabold text-slate-800 mt-2">
                    Rp {{ number_format($riwayat['nominal'], 0, ',', '.') }}
                </h2>

            </div>


            <div class="space-y-4">

                <div class="flex justify-between items-center border-b border-slate-100 pb-4">

                    <span class="text-sm text-slate-500">
                        ID Transaksi
                    </span>

                    <span class="text-sm font-bold text-slate-800">
                        {{ $riwayat['id'] }}
                    </span>

                </div>


                <div class="flex justify-between items-center border-b border-slate-100 pb-4">

                    <span class="text-sm text-slate-500">
                        Jenis Retribusi
                    </span>

                    <span class="text-sm font-bold text-slate-800">
                        {{ $riwayat['jenis'] }}
                    </span>

                </div>


                <div class="flex justify-between items-center border-b border-slate-100 pb-4">

                    <span class="text-sm text-slate-500">
                        Tanggal Pembayaran
                    </span>

                    <span class="text-sm font-bold text-slate-800">
                        {{ $riwayat['tanggal'] }}
                    </span>

                </div>


                <div class="flex justify-between items-center border-b border-slate-100 pb-4">

                    <span class="text-sm text-slate-500">
                        Metode Pembayaran
                    </span>

                    <span class="text-sm font-bold text-slate-800">
                        {{ $riwayat['metode'] }}
                    </span>

                </div>


                <div class="flex justify-between items-center">

                    <span class="text-sm text-slate-500">
                        Status
                    </span>

                    @if($riwayat['status'] === 'Berhasil')

                        <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-bold">
                            Berhasil
                        </span>

                    @else

                        <span class="px-3 py-1 bg-red-50 text-red-600 rounded-full text-xs font-bold">
                            Gagal
                        </span>

                    @endif

                </div>

            </div>


            <div class="mt-8">

                <a
                    href="{{ route('pascer.history') }}"
                    class="block w-full text-center bg-[#0060AF] hover:bg-[#003D79] text-white py-3 rounded-xl font-bold transition"
                >
                    Kembali ke Riwayat
                </a>

            </div>

        </div>

    </div>

</div>

@endsection