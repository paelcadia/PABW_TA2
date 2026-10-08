@extends('layouts.app')

@section('title', 'Pembayaran Berhasil')

@section('content')

<div class="max-w-md mx-auto px-5 py-10">

    <div class="bg-white rounded-3xl p-6 shadow-lg border border-slate-100 text-center">

        <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-5">
            <i class="ph-fill ph-check-circle text-5xl"></i>
        </div>

        <h2 class="text-2xl font-bold text-slate-800">
            Pembayaran Berhasil!
        </h2>

        <p class="text-sm text-slate-500 mt-2">
            Pembayaran retribusi untuk periode
            <span class="font-bold">
                {{ $periode_text }}
            </span>
            telah berhasil dilakukan.
        </p>

        <div class="bg-slate-50 rounded-2xl p-4 mt-6 text-left space-y-3">

            <div class="flex justify-between text-sm">
                <span class="text-slate-500">
                    ID Kios
                </span>

                <span class="font-bold text-slate-700">
                    {{ $id_kios }}
                </span>
            </div>

            <div class="flex justify-between text-sm">
                <span class="text-slate-500">
                    Nama Kios
                </span>

                <span class="font-bold text-slate-700">
                    {{ $nama_kios }}
                </span>
            </div>

            <div class="flex justify-between text-sm">
                <span class="text-slate-500">
                    Nama Pedagang
                </span>

                <span class="font-bold text-slate-700">
                    {{ $nama_pemilik }}
                </span>
            </div>

            <div class="flex justify-between text-sm">
                <span class="text-slate-500">
                    Periode
                </span>

                <span class="font-bold text-slate-700">
                    {{ $periode_text }}
                </span>
            </div>

            <div class="flex justify-between text-sm">
                <span class="text-slate-500">
                    Metode Pembayaran
                </span>

                <span class="font-bold text-slate-700">
                    {{ $paymentMethod }}
                </span>
            </div>

            <div class="border-t border-dashed pt-3 mt-3 flex justify-between">

                <span class="font-bold text-slate-700">
                    Total Dibayar
                </span>

                <span class="font-extrabold text-[#0060AF] text-lg">
                    Rp {{ number_format($total_pembayaran, 0, ',', '.') }}
                </span>

            </div>

        </div>

        <a
            href="{{ route('pascer.dashboard') }}"
            class="block mt-6 w-full bg-[#0060AF] hover:bg-[#003D79] text-white py-3 rounded-xl font-bold transition"
        >
            Kembali ke Beranda
        </a>

        <a
            href="{{ route('pascer.history') }}"
            class="block mt-3 w-full bg-white border border-slate-200 text-slate-600 py-3 rounded-xl font-bold transition hover:bg-slate-50"
        >
            Lihat Riwayat Pembayaran
        </a>

    </div>

</div>

@endsection