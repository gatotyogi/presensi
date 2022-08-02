@extends('layouts.main')
@section('title', 'Edit Kelas')
@section('content')
    <x-page-title>
        <x-slot name="title">Kelas</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item">Kelas</li>
            <li class="breadcrumb-item active">Edit Kelas</li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-12">
            @include('messages.alert')
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Edit Kelas</h3>
                    <form action="{{ route('kelas.update', $kelas->kode_kelas) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="title">kode Kelas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('kode_kelas') is-invalid @enderror"
                                name="kode_kelas" value="{{ old('kode_kelas', $kelas->kode_kelas) }}" id="Kode Kelas"
                                required placeholder="Kode Kelas" readonly>
                            <span class="text-center">Kode Kelas Tidak Dapat Di Edit</span>


                        </div>


                        <div class="form-group">
                            <label for="title">Nama Kelas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}" id="nama Kelas"
                                required placeholder="Nama Kelas">
                        </div>


                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                                name="keterangan" id="keterangan" rows="5">{{ old('content', $kelas->keterangan) }}</textarea>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('kelas.index') }}" class="btn btn-secondary" title="Kembali"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                            <button class="btn btn-primary" title="Update">Update <i class="fas fa-update"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
