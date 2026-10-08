@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

    <h2>Form Laporan Banjir</h2>

    <div class="card">

        <form action="{{ route('lapor.store') }}" method="POST">

            @csrf

            <label for="nama">Nama Pelapor</label>
            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama pelapor"
                required
            >

            <label for="lokasi">Lokasi Kejadian</label>
            <input
                type="text"
                id="lokasi"
                name="lokasi"
                placeholder="Masukkan lokasi kejadian"
                required
            >

            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input
                type="number"
                id="tinggi"
                name="tinggi"
                placeholder="Masukkan tinggi genangan"
                required
            >

            <button type="submit">
                Kirim Laporan
            </button>

        </form>

    </div>

@endsection