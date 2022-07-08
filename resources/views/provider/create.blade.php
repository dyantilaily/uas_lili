@extends('dashboard.layouts.main')
@section('content')
<div class="container mb-5 mt-5">
    <h3>Tambah Provider</h3>
</div>
<form method="post" action="{{ url('/providers/store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nama Provider</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="Nama Provider" name="nama_provider" required>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Logo</label>
        <div class="col-sm-3">
            <input type="file" accept="image/png" class="form-control" name="logo">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection