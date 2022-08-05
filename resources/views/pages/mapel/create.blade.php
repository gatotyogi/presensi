@extends('layouts.main')

@section('title', 'Tambah Mapel')
@section('content')
    <x-page-title>
        <x-slot name="title">Mapel</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item">Mapel</li>
            <li class="breadcrumb-item active">Tambah Mapel</li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-12">
            @include('messages.alert')
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Form Input</h3>
                    <form method="POST" action="{{ route('mapel.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">Kode Mapel <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('kode_mapel') is-invalid @enderror"
                                name="kode_mapel" value="{{ old('kode_mapel') }}" id="kode_mapel" required
                                placeholder="Kode mapel">
                        </div>

                        <div class="form-group">
                            <label for="title">Nama Mapel <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror"
                                name="nama_mapel" value="{{ old('nama_mapel') }}" id="nama_mapel" required
                                placeholder="Nama Mapel">
                        </div>

                        <div class="form-group">
                            <label for="title">Keterangan</label>
                            <textarea name="keterangan" cols="30" rows="3" class="form-control"></textarea>
                        </div>



                        <div class="text-center">
                            <a href="{{ route('mapel.index') }}" class="btn btn-secondary" title="Kembali"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                            <button class="btn btn-primary" title="Simpan">Simpan <i class="fas fa-save"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
