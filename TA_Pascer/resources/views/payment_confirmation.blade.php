@extends('layouts.app')

@section('title', 'Konfirmasi Pembayaran')

@section('content')

<div class="max-w-4xl mx-auto px-5 py-6">

    <!-- HEADER -->
    <div class="bg-[#0060AF] text-white rounded-b-[30px] -mx-5 -mt-6 mb-6 px-6 py-8">

        <div class="flex items-center">

            <a
                href="{{ route('pascer.pembayaran') }}"
                class="bg-white/20 hover:bg-white/30 p-2 rounded-full transition"
            >
                <i class="ph-bold ph-arrow-left text-xl"></i>
            </a>

            <h1 class="text-xl font-bold ml-4">
                Konfirmasi Pembayaran
            </h1>

        </div>

    </div>


    <!-- FORM -->
    <form
        action="{{ route('pascer.payment.success') }}"
        method="POST"
    >

        @csrf

        <input type="hidden" name="id_kios" value="{{ $id_kios }}">
        <input type="hidden" name="nama_kios" value="{{ $nama_kios }}">
        <input type="hidden" name="nama_pemilik" value="{{ $nama_pemilik }}">
        <input type="hidden" name="periode_text" value="{{ $periode_text }}">
        <input type="hidden" name="total_pembayaran" value="{{ $total_pembayaran }}">


        <!-- RINGKASAN TAGIHAN -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 mb-5">

            <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">

                <i class="ph-bold ph-receipt text-[#0060AF]"></i>

                Ringkasan Tagihan

            </h2>

            <div class="space-y-3 text-sm">

                <div class="flex justify-between">

                    <span class="text-slate-500">
                        ID Kios / Kios
                    </span>

                    <span class="font-semibold text-slate-700">
                        {{ $id_kios }} / {{ $nama_kios }}
                    </span>

                </div>

                <div class="flex justify-between">

                    <span class="text-slate-500">
                        Nama Pedagang
                    </span>

                    <span class="font-semibold text-slate-700">
                        {{ $nama_pemilik }}
                    </span>

                </div>

                <div class="flex justify-between">

                    <span class="text-slate-500">
                        Periode Tagihan
                    </span>

                    <span class="font-semibold text-slate-700">
                        {{ $periode_text }}
                    </span>

                </div>

                <div class="flex justify-between border-t border-dashed pt-3 mt-3">

                    <span class="font-bold text-slate-800">
                        Total Bayar
                    </span>

                    <span class="font-extrabold text-[#0060AF] text-lg">
                        Rp {{ number_format($total_pembayaran, 0, ',', '.') }}
                    </span>

                </div>

            </div>

        </div>


        <!-- METODE PEMBAYARAN -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 mb-5">

            <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">

                <i class="ph-bold ph-credit-card text-[#0060AF]"></i>

                Pilih Metode Pembayaran

            </h2>


            <div class="space-y-3">


                <!-- QRIS -->
                <label class="block border-2 border-blue-600 bg-blue-50 rounded-xl p-4 cursor-pointer">

                    <div class="flex items-center gap-3">

                        <input
                            type="radio"
                            name="paymentMethod"
                            value="QRIS"
                            checked
                            class="accent-blue-600"
                        >

                        <div class="flex-1">

                            <p class="font-bold text-slate-800">
                                QRIS
                            </p>

                            <p class="text-xs text-slate-500 mt-1">
                                Mendukung GOPAY, OVO, Dana, LinkAja, dan m-Banking.
                            </p>

                        </div>

                        <i class="ph-bold ph-qr-code text-2xl text-[#0060AF]"></i>

                    </div>

                </label>


                <!-- BANK BJB -->
                <label class="block border-2 border-slate-200 rounded-xl p-4 hover:border-blue-600 cursor-pointer">

                    <div class="flex items-center gap-3">

                        <input
                            type="radio"
                            name="paymentMethod"
                            value="Bank BJB"
                            class="accent-blue-600"
                        >

                        <div class="flex-1">

                            <p class="font-bold text-slate-800">
                                Bank BJB
                            </p>

                            <p class="text-xs text-slate-500 mt-1">
                                Pembayaran melalui Virtual Account Bank BJB.
                            </p>

                        </div>

                        <i class="ph-bold ph-bank text-2xl text-blue-600"></i>

                    </div>

                </label>


                <!-- BANK LAIN -->
                <label class="block border-2 border-slate-200 rounded-xl p-4 hover:border-blue-600 cursor-pointer">

                    <div class="flex items-center gap-3">

                        <input
                            type="radio"
                            name="paymentMethod"
                            value="Bank Lain"
                            class="accent-blue-600"
                        >

                        <div class="flex-1">

                            <p class="font-bold text-slate-800">
                                Bank Lain (Transfer)
                            </p>

                            <p class="text-xs text-slate-500 mt-1">
                                BCA, Mandiri, BRI, BNI, dan bank lainnya.
                            </p>

                        </div>

                        <i class="ph-bold ph-money text-2xl text-indigo-600"></i>

                    </div>

                </label>

            </div>

        </div>


        <!-- BUTTON -->
        <button
            type="submit"
            class="w-full bg-[#0060AF] hover:bg-[#003D79] text-white py-4 rounded-xl font-bold transition shadow-lg"
        >

            <i class="ph-bold ph-check mr-2"></i>

            Bayar Sekarang

        </button>

    </form>

</div>

@endsection