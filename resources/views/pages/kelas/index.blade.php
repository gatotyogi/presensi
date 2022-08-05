@extends('layouts.main')

@section('title', 'Kelas')

@section('content')
    <x-page-title>
        <x-slot name="title"> <i class="mdi mdi-airplay"></i> Kelas</x-slot>
        <x-slot name="item">
        </x-slot>
    </x-page-title>
    <div class="row">
        @include('messages.alert')

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Kelas</h3>
                    <p class="card-title-desc">List Kelas</p>
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-sm  mb-2">Tambah Data <i
                            class="fas fa-plus"></i></a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="kelas">
                            <thead>
                                <th>No</th>
                                <th>Kode Kelas</th>
                                <th>Nama kelas</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                @forelse ($kelas as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_kelas }}</td>
                                        <td>{{ $item->nama_kelas }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('kelas.edit', $item->id) }}" class="btn btn-warning"> <i
                                                    class="fas fa-edit"></i></a>
                                            <a href="{{ route('kelas.show', $item->id) }}" class="btn btn-success"> <i
                                                    class="fas fa-eye"></i></a>
                                            <form method="POST" action="{{ route('kelas.destroy', [$item->id]) }}">
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
            $('#kelas').DataTable();
        });
    </script>
@endpush
