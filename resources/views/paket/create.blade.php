@extends('dashboard.layouts.main')
@section('content')
<div class="container mb-5 mt-5">
    <h3>Tambah Paket</h3>
</div>
<form method="post" action="{{ url('/paket/store') }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Provider</label>
        <div class="col-sm-3">
            <select class="form-select" name="provider">
                <option value="">Pilih...</option>
                @foreach ($providers as $provider)
                <option value="{{ $provider->id_provider }}">{{ $provider->nama_provider }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Paket</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" required>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="harga" placeholder="Harga" required>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-3">
            <textarea class="form-control" placeholder="Keterangan" style="height: 130px; resize:none;" name="ket_paket" required></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection