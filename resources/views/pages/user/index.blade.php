@extends('layouts.main')

@section('title', 'User')

@section('content')
    <x-page-title>
        <x-slot name="title"> <i class="mdi mdi-airplay"></i> User</x-slot>
        <x-slot name="item">
        </x-slot>
    </x-page-title>
    <div class="row">
        @include('messages.alert')

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">User</h3>
                    <p class="card-title-desc">List User</p>
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm  mb-2">Tambah Data <i
                            class="fas fa-plus"></i></a>

                    <div class="table-responsive">
                        <table class="table table-striped" id="user">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Opsi</th>
                            </thead>
                            <tbody>
                                @forelse ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            @foreach ($item->roles as $role)
                                                <span class="badge badge-info mr-1">
                                                    {{ $role->name }}
                                                </span>
                                            @endforeach
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        {{-- <td>
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
                                        </td> --}}
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
