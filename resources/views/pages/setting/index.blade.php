@extends('layouts.main')

@section('title', 'Pengaturan')

@section('content')
    <x-page-title>
        <x-slot name="title"> <i class="mdi mdi-airplay"></i> Pengaturan</x-slot>
        <x-slot name="item">
        </x-slot>
    </x-page-title>

    <form action="{{ route('setting.update', $setting->id) }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{ $setting->id }}">
                        <div class="form-group">
                            <label for="">Mode Absen</label>
                            <select name="mode" id="" class="form-control">
                                <option value="1">Mode Scan</option>
                                <option value="2">Mode Tambah Kartu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Jam Masuk</label>
                            <input type="time" class="form-control" name="jam_masuk" value="{{ $setting->jam_masuk }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jam Pulang</label>
                            <input type="time" class="form-control" name="jam_pulang" value="{{ $setting->jam_pulang }}">
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger btn-sm"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                    <button class="btn btn-success btn-sm" type="submit">Update <i class="fas fa-edit"></i></button>
                </div>
            </div>
        </div>
    </form>
@endsection
