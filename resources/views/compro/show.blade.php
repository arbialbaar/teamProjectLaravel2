@extends('layout.master')
@section('title', 'Join Us')
@section('Show', 'active')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-1">
                <h1 class="h1 mr-auto">Biodata {{ $member->nama }}</h1>
                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('members.destroy', ['member'=>$member->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Hapus</button>
                </form>
                <a href="{{ route('members.join') }}" class="btn btn-success">Back</a>
            </div>
            <hr>
            @if (session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            <ul>
                <li>Nama : {{ $member->nama }}</li>
                <li>Email : {{ $member->email }}</li>
                <li>Nomor Telepon : {{ $member->no_hp }}</li>
                <li>Jenis Kelamin : {{ $member->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki' }}</li>
                <li>Pekerjaan : {{ $member->status->pekerjaan }}</li>
                <li>Alamat : {{ $member->alamat }}</li>
                <li>Bagian : {{ $member->status->bagian }}</li>
            </ul>
        </div>
    </div>
</div>

@endsection
