@extends('layouts.main')
@section('title', 'Detail Kelas')
@section('content')
    <x-page-title>
        <x-slot name="title">Kelas</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item">Kelas</li>
            <li class="breadcrumb-item active">Detail Kelas</li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-12">
            @include('messages.alert')
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-2"><strong>{{ $kelas->nama_kelas }}</strong> </h3>
                    <hr>
                    <div>
                        <p class="text-muted mb-1">Kode Kelas</p>
                        <h6>{{ $kelas->kode_kelas }}</h6>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Nama Kelas</p>
                        <h6>{{ $kelas->nama_kelas }}</h6>
                    </div>
                    <div>
                        <p class="text-muted mb-1">Keterangan</p>
                        <h6>{{ $kelas->ketrangan }}</h6>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a href="{{ route('kelas.index') }}" class="btn btn-secondary btn-sm" title="Kembali"><i
                                class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
