@extends('layout.master')
@section('title', 'Join Us')
@section('Join', 'active')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h2>Data Member</h2>
                <a href="{{ route('members.create') }}" class="btn btn-primary">Tambah Member</a>
            </div>

            @if (session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
            @endif

            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Bagian</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('members.show', ['member' => $item->id]) }}">{{ $item->nama }}</a></td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki'}}</td>
                            <td>{{ $item->status->pekerjaan }}</td>
                            <td>{{ $item->alamat == '' ? 'N/A' : $item->alamat}}</td>
                            <td>{{ $item->status->bagian }}</td>
                        </tr>
                    @empty
                        <td colspan="6" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
