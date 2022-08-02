@extends('layouts.main')
@section('title', 'Tambah Kelas')
@section('content')
    <x-page-title>
        <x-slot name="title">Kelas</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item">Kelas</li>
            <li class="breadcrumb-item active">Tambah Kelas</li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-12">
            @include('messages.alert')
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tambah Kelas</h3>
                    <form method="POST" action="{{ route('kelas.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">Kode Kelas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('kode_kelas') is-invalid @enderror"
                                name="kode_kelas" value="{{ old('kode_kelas') }}" id="kode_kelas" required
                                placeholder="Kode Kelas">
                        </div>

                        <div class="form-group">
                            <label for="title">Nama Kelas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                name="nama_kelas" value="{{ old('nama_kelas') }}" id="nama_kelas" required
                                placeholder="Nama Kelas">
                        </div>

                        <div class="form-group">
                            <label for="title">Keterangan Kelas <span class="text-danger">*</span></label>
                            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="3" required></textarea>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('kelas.index') }}" class="btn btn-secondary" title="Kembali"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                            <button class="btn btn-primary" title="Simpan">Simpan <i class="fas fa-save"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
