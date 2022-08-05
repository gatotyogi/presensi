@extends('layouts.main')

@section('title', 'Siswa')

@section('content')
    <x-page-title>
        <x-slot name="title"> <i class="mdi mdi-airplay"></i> Siswa</x-slot>
        <x-slot name="item">
        </x-slot>
    </x-page-title>
    <div class="row">
        @include('messages.alert')

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Siswa</h3>
                    <p class="card-title-desc">List Siswa</p>
                    <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm  mb-2">Tambah Data <i
                            class="fas fa-plus"></i></a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="siswa">
                            <thead>
                                <th>No</th>
                                <th> NISN</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Nomor Kartu</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                @forelse ($siswa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <a href="{{ route('siswa.edit', $item->id) }}">{{ $item->nisn }}</a> </td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->kelas->nama_kelas }}</td>
                                        <td>{{ $item->no_kartu }}</td>
                                        <td>
                                            <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning"> <i
                                                    class="fas fa-edit"></i></a>
                                            <a href="{{ route('siswa.show', $item->id) }}" class="btn btn-success"> <i
                                                    class="fas fa-eye"></i></a>
                                            <form method="POST" action="{{ route('siswa.destroy', [$item->id]) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button onclick="return confirm('Yakin Ingin Hapus data?');" type="submit"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#siswa').DataTable();
        });
    </script>
@endpush
