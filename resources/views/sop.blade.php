{{-- Pastikan Anda menggunakan huruf kecil untuk variabel `$sop` --}}
@foreach ($sops as $sop)
    <div>
        <p>sda</p>
        <p>Status: {{ $sop->is_executed ? 'Dilaksanakan' : 'Belum Dilaksanakan' }}</p>
        <form action="{{ route('sop.updateStatus', $sop->id) }}" method="POST">
            @csrf
            <input type="hidden" name="is_executed" value="{{ !$sop->is_executed }}">
            <button type="submit">{{ $sop->is_executed ? 'Ubah ke Belum Dilaksanakan' : 'Ubah ke Dilaksanakan' }}</button>
        </form>
    </div>
@endforeach


