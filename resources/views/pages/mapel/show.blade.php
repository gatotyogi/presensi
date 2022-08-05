@extends('layouts.main')
@section('title', 'Detail Mata Pelajaran')
@section('content')
    <x-page-title>
        <x-slot name="title">Mata Pelajaran</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item">Mata Pelajaran</li>
            <li class="breadcrumb-item active">Detail Mata Pelajaran</li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-12">
            @include('messages.alert')
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-2"><strong>{{ $mapel->nama_mapel }}</strong> </h3>
                    <hr>
                    <div>
                        <p class="text-muted mb-1">Kode Mapel</p>
                        <h6>{{ $mapel->kode_mapel }}</h6>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Nama Mapel</p>
                        <h6>{{ $mapel->nama_mapel }}</h6>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Keterangan</p>
                        <h6>{{ $mapel->keterangan }}</h6>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a href="{{ route('mapel.index') }}" class="btn btn-secondary btn-sm" title="Kembali"><i
                                class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
