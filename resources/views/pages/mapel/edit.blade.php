@extends('layouts.main')
@section('title', 'Edit Mata Pelajaran')
@section('content')
    <x-page-title>
        <x-slot name="title">Mata Pelajaran</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item">Mata Pelajaran</li>
            <li class="breadcrumb-item active">Edit Mata Pelajaran</li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-12">
            @include('messages.alert')
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Edit Mata Pelajaran</h3>
                    <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Kode Mapel <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('kode_mapel') is-invalid @enderror"
                                name="kode_mapel" value="{{ old('kode_mapel', $mapel->kode_mapel) }}" id="kode_mapel"
                                required placeholder="kode_mapel">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Nama Kelas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror"
                                name="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}" id="nama_kelas"
                                required placeholder="nama_kelas">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                                name="keterangan" id="keterangan" rows="5">{{ old('keterangan', $kelas->keterangan) }}</textarea>

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
@section('js')
    <script>
        $(document).ready(function() {
            $("#fullname").keyup(function() {
                $(this).val($(this).val().toUpperCase());
            });
        });
    </script>
@endsection
