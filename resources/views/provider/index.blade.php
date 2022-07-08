@extends('dashboard.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="table-responsive">
        <div class="container">
            <h3>Data Provider</h3>
        </div>
        <a href="{{ url('providers/create') }}" class="btn btn-primary text-dark"><img src="{{ asset('icons/plus-circle.svg') }}" width="20" alt=""> <b>Provider</b></a>
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
                    <th scope="col">ID</th>
                    <th scope="col" class="text-center" width="400">Logo</th>
                    <th scope="col" width="800">Nama Provider</th>
                    <th colspan="2" class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($data as $provider)
                <tr class="align-middle">
                    <td class="text-center justify-content-center">{{ $provider->id_provider }}</td>
                    <td class="justify-content-center text-center"><img width="30" src="{{ url('storage/')}}/{{ $provider->logo }}" alt="{{ $provider->nama_provider }}"></td>
                    <td>{{ $provider->nama_provider }}</td>
                    <td><a href="{{ url('/providers/edit') }}/{{ $provider->id_provider }}" class="btn btn-success" href="{{ url('/providers/edit/id') }}"><img src="{{ asset('icons/pencil-square.svg')  }}" alt=""></a></td>
                    <td><a onclick="return confirm('Ingin Menghapus Provider Ini ?');" class="btn btn-danger" href="{{ url('/providers/destroy')}}/{{ $provider->id_provider }}"><img src="{{ asset('icons/trash.svg') }}" alt=""></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection