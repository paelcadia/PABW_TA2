@extends('layouts.app')

@section('title', 'Bayar Retribusi')

@section('content')

<div class="max-w-4xl mx-auto px-5 py-6">

    <!-- HEADER HALAMAN -->
    <div class="bg-[#0060AF] text-white rounded-b-[30px] -mx-5 -mt-6 mb-6 px-6 py-8">

        <div class="flex items-center">

            <a
                href="{{ route('pascer.dashboard') }}"
                class="bg-white/20 hover:bg-white/30 p-2 rounded-full transition"
            >
                <i class="ph-bold ph-arrow-left text-xl"></i>
            </a>

            <h1 class="text-xl font-bold ml-4">
                Bayar Retribusi
            </h1>

        </div>

    </div>


    <!-- DETAIL KIOS -->
    <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 mb-5">

        <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">

            <i class="ph-bold ph-storefront text-[#0060AF]"></i>

            Detail Kios

        </h2>

        <div class="space-y-3 text-sm">

            <div class="flex justify-between">
                <span class="text-slate-500">
                    ID Kios / Lokasi
                </span>

                <span class="font-semibold text-slate-700">
                    {{ $id_kios }} / {{ $lokasi }}
                </span>
            </div>

            <div class="flex justify-between">
                <span class="text-slate-500">
                    Nama Kios
                </span>

                <span class="font-semibold text-slate-700">
                    Kios {{ $nama_kios }}
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
                    No. Telepon
                </span>

                <span class="font-semibold text-slate-700">
                    {{ $no_telp }}
                </span>
            </div>

        </div>

    </div>


    <!-- FORM PEMBAYARAN -->
    <form
        action="{{ route('pascer.payment.confirmation') }}"
        method="POST"
    >

        @csrf

        <input
            type="hidden"
            name="id_kios"
            value="{{ $id_kios }}"
        >

        <input
            type="hidden"
            name="nama_kios"
            value="{{ $nama_kios }}"
        >

        <input
            type="hidden"
            name="nama_pemilik"
            value="{{ $nama_pemilik }}"
        >


        <!-- PILIH TAGIHAN -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 mb-5">

            <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">

                <i class="ph-bold ph-calendar text-[#0060AF]"></i>

                Periode Tagihan

            </h2>

            <label
                for="id_tagihan"
                class="block text-sm font-medium text-slate-600 mb-2"
            >
                Pilih Bulan Tagihan
            </label>

            <select
                name="id_tagihan"
                id="id_tagihan"
                required
                class="w-full px-4 py-3 border border-slate-300 rounded-xl bg-white focus:outline-none focus:border-[#0060AF]"
            >

                @foreach($tagihan as $data)

                    <option
                        value="{{ $data['id_tagihan'] }}"
                        data-periode="{{ $data['periode_text'] }}"
                        data-nominal="{{ $data['nominal'] }}"
                    >
                        {{ $data['periode_text'] }}
                    </option>

                @endforeach

            </select>

        </div>


        <!-- RINGKASAN -->
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-slate-100 mb-5">

            <h2 class="text-lg font-bold text-slate-800 mb-4">
                Rincian Pembayaran
            </h2>

            <div class="flex justify-between mb-3">

                <span class="text-slate-500">
                    Periode
                </span>

                <span
                    id="periodeText"
                    class="font-semibold text-slate-700"
                >
                    {{ $tagihan[0]['periode_text'] }}
                </span>

            </div>

            <div class="flex justify-between">

                <span class="text-slate-500">
                    Total Pembayaran
                </span>

                <span
                    id="totalPayment"
                    class="text-[#0060AF] font-bold text-xl"
                >
                    Rp {{ number_format($tagihan[0]['nominal'], 0, ',', '.') }}
                </span>

            </div>

        </div>


        <!-- BUTTON -->
        <button
            type="submit"
            class="w-full bg-[#0060AF] hover:bg-[#003D79] text-white py-3.5 rounded-xl font-bold transition"
        >

            <i class="ph-bold ph-arrow-right mr-2"></i>

            Lanjutkan Pembayaran

        </button>

    </form>

</div>


<!-- JAVASCRIPT -->
<script>

    const selectTagihan = document.getElementById('id_tagihan');
    const periodeText = document.getElementById('periodeText');
    const totalPayment = document.getElementById('totalPayment');

    selectTagihan.addEventListener('change', function () {

        const option = this.options[this.selectedIndex];

        const periode = option.getAttribute('data-periode');
        const nominal = option.getAttribute('data-nominal');

        periodeText.textContent = periode;

        totalPayment.textContent =
            'Rp ' +
            Number(nominal).toLocaleString('id-ID');

    });

</script>

@endsection