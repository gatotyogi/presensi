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
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-2"><strong>{{ $kelas->kode_kelas }}</strong> </h3>
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
                        <p class="text-muted mb-1">Keteranagan</p>
                        <h6>{{ $kelas->keterangan }}</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="my-2">Daftar Siswa Kelas {{ $kelas->nama_kelas }}</h5>
                            <table class="table table-striped" id="kelas">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('kelas.index') }}" class="btn btn-secondary btn-sm" title="Kembali"><i
                            class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#kelas').DataTable();
        });
    </script>
@endpush
