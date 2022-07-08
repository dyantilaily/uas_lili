@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="table-responsive">
        <div class="container">
            <h3>Data Paket</h3>
        </div>
        <a href="{{ url('paket/create') }}" class="btn btn-primary text-dark"><img src="{{ asset('icons/plus-circle.svg') }}" width="20" alt=""> <b>Paket</b></a>
        @if (session()->has('create'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('create') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif (session()->has('destroy'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('destroy') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif (session()->has('update'))
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            {{ session('update') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-start" width="200">Nama Paket</th>
                    <th scope="col" width="300" class="text-center">Provider</th>
                    <th scope="col" width="300" class="text-center">Harga</th>
                    <th scope="col" width="500">Keterangan</th>
                    <th colspan="2" class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($data as $paket)
                <tr class="align-middle">
                    <td class="text-center justify-content-center">{{ $paket->id_paket }}</td>
                    <td>{{ $paket->nama_paket }}</td>
                    <td class="text-center"><img src="{{ url('storage') }}/{{ $paket->logo }}" alt="1" width="30">{{ $paket->nama_provider }}</td>
                    <td class="text-center">Rp. {{ $paket->harga }}</td>
                    <td>{{ $paket->ket_paket }}</td>
                    <td><a class="btn btn-success" href="{{ url('/paket/edit') }}/{{ $paket->id_paket }}"><img src="{{ asset('icons/pencil-square.svg')  }}" alt=""></a></td>
                    <td><a onclick="return confirm('Ingin Menghapus Paket Ini ?');" class="btn btn-danger" href="{{ url('/paket/destroy') }}/{{ $paket->id_paket }}"><img src="{{ asset('icons/trash.svg') }}" alt=""></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection