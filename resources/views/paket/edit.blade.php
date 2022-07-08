@extends('dashboard.layouts.main')
@section('content')
<div class="container mb-5 mt-5">
    <h3>Edit Paket</h3>
</div>
@foreach ( $data as $paket )
<form method="post" action="{{ url('/paket/update') }}/{{ $paket->id_paket }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Provider</label>
        <div class="col-sm-3">
            <select class="form-select" name="provider">
                <option value="{{ $paket->id_provider }}">{{ $paket->nama_provider }}</option>
                @foreach ($providers as $provider)
                <option value="{{ $provider->id_provider }}">{{ $provider->nama_provider }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Paket</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" value="{{ $paket->nama_paket }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{ $paket->harga }}" required>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-3">
            <textarea class="form-control" name="ket_paket" placeholder="Keterangan" style="height: 130px; resize:none;" required>{{ $paket->ket_paket }}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endforeach
@endsection