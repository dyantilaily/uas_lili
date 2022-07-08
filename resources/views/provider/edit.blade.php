@extends('dashboard.layouts.main')
@section('content')
<div class="container mb-5 mt-5">
    <h3>Edit Provider</h3>
</div>
<form method="post" action="{{ url('/providers/update') }}/{{ $data->id_provider }}" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Provider</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="nama_provider" value="{{ $data->nama_provider }}">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-3">
            <input type="file" accept="image/png" class="form-control" name="logo">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection