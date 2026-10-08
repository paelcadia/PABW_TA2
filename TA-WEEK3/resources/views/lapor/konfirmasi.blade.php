@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

    <h2>Konfirmasi Laporan</h2>

    <x-alert
        type="success"
        message="Laporan banjir berhasil dikirim."
    />

    @if($laporan)

        <div class="card">

            <h3>Data Laporan</h3>

            <p>
                <strong>Nama Pelapor:</strong>
                {{ $laporan['nama'] }}
            </p>

            <p>
                <strong>Lokasi Kejadian:</strong>
                {{ $laporan['lokasi'] }}
            </p>

            <p>
                <strong>Tinggi Genangan:</strong>
                {{ $laporan['tinggi'] }} cm
            </p>

        </div>

    @else

        <p>Data laporan tidak ditemukan.</p>

    @endif

@endsection