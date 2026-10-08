<div class="card">

    <h3>{{ $laporan['nama'] }}</h3>

    <p>
        <strong>Lokasi:</strong>
        {{ $laporan['lokasi'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $laporan['tinggi'] }} cm
    </p>

    <p>
        <strong>Status:</strong>

        @if($laporan['tinggi'] < 30)
            <span class="status">Waspada</span>
        @elseif($laporan['tinggi'] <= 70)
            <span class="status">Siaga</span>
        @else
            <span class="status">Awas</span>
        @endif

    </p>

</div>