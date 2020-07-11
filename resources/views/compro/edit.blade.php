@extends('layout.master')
@section('title', 'Join Us')
@section('Update', 'active')
@section('content')

<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Member</h1>
            <hr>
            <form action="{{ route('members.update', $member->id) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') ?? $member->nama }}">
                    @error('nama')
                        <div class="text-danger">{{ $pesan }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') ?? $member->email }}">
                    @error('email')
                        <div class="text-danger">{{ $pesan }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_hp">Nomor Telepon</label>
                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') ?? $member->no_hp }}">
                    @error('no_hp')
                        <div class="text-danger">{{ $pesan }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="Laki_Laki" value="L" {{ (old('jenis_kelamin') ?? $member->jenis_kelamin) ==  'L' ? 'checked' : '' }}>
                    <label for="form-check-label" for="laki_laki">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $member->jenis_kelamin) ==  'P' ? 'checked' : '' }}>
                    <label for="form-check-label" for="perempuan">perempuan</label>
                </div>
                @error('jenis_kelamin')
                    <div class="text-center">{{ $pesan }}</div>
                @enderror
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') ?? $member->status->pekerjaan  }}">
                    @error('pekerjaan')
                        <div class="text-danger">{{ $pesan }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') ?? $member->alamat }}">
                    @error('alamat')
                        <div class="text-danger">{{ $pesan }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <select name="bagian" id="bagian" class="form-control">
                        <option value="Basic Member Rp 5.000.000" {{ (old('bagian') ?? $member->status->bagian) == 'Basic Member Rp 5.000.000' ? 'selected' : '' }}>
                            Basic Member Rp 5.000.000
                        </option>
                        <option value="Gold Member Rp 8.000.000" {{ (old('bagian') ?? $member->status->bagian) == 'Gold Member Rp 8.000.000' ? 'selected' : '' }}>
                            Gold Member Rp 8.000.000
                        </option>
                        <option value="Diamond Member Rp 12.000.000" {{ (old('bagian') ?? $member->status->bagian) == 'Diamond Member Rp 12.000.000' ? 'selected' : '' }}>
                            Diamond Member Rp 12.000.000
                        </option>
                    </select>
                    @error('bagian')
                        <div class="text-danger">{{ $pesan }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-2">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
