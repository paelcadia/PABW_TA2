@extends('layouts.app')

@section('title', 'Edit Kios')

@section('content')

<div class="max-w-md mx-auto px-5 py-6">

    <div class="flex items-center gap-3 mb-6">

        <a
            href="{{ route('pascer.kiosku') }}"
            class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-slate-100 text-slate-600"
        >
            <i class="ph-bold ph-arrow-left text-xl"></i>
        </a>

        <div>
            <h1 class="text-xl font-bold text-slate-800">
                Edit Data Kios
            </h1>

            <p class="text-xs text-slate-400">
                Perbarui informasi kios Anda
            </p>
        </div>

    </div>

    @if(session('success'))

        <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-5 text-sm">
            {{ session('success') }}
        </div>

    @endif

    <form
        action="{{ route('pascer.kiosku.update') }}"
        method="POST"
        class="bg-white rounded-3xl p-5 shadow-sm border border-slate-100"
    >

        @csrf

        <div class="mb-4">

            <label
                for="nama"
                class="block text-sm font-semibold text-slate-700 mb-2"
            >
                Nama Kios
            </label>

            <input
                type="text"
                id="nama"
                name="nama"
                value="{{ $kios['nama'] }}"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#0060AF]"
                required
            >

        </div>

        <div class="mb-4">

            <label
                for="pemilik"
                class="block text-sm font-semibold text-slate-700 mb-2"
            >
                Nama Pemilik
            </label>

            <input
                type="text"
                id="pemilik"
                name="pemilik"
                value="{{ $kios['pemilik'] }}"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#0060AF]"
                required
            >

        </div>

        <div class="mb-4">

            <label
                for="lokasi"
                class="block text-sm font-semibold text-slate-700 mb-2"
            >
                Lokasi Kios
            </label>

            <input
                type="text"
                id="lokasi"
                name="lokasi"
                value="{{ $kios['lokasi'] }}"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#0060AF]"
                required
            >

        </div>

        <div class="mb-6">

            <label
                for="id"
                class="block text-sm font-semibold text-slate-700 mb-2"
            >
                ID Kios
            </label>

            <input
                type="text"
                id="id"
                value="{{ $kios['id'] }}"
                class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-100 text-slate-500"
                disabled
            >

        </div>

        <button
            type="submit"
            class="w-full bg-[#0060AF] hover:bg-[#003D79] text-white py-3 rounded-xl font-bold transition"
        >
            Simpan Perubahan
        </button>

    </form>

</div>

@endsection