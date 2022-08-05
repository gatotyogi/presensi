@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
    <x-page-title>
        <x-slot name="title"> <i class="mdi mdi-airplay"></i> Dashboard</x-slot>
        <x-slot name="item">
        </x-slot>
    </x-page-title>

    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body" title="">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-format-align-justify"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Total Kelas</div>
                            <h6>{{ App\Models\Kelas::count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body" title="">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-success text-success rounded">
                                <i class="mdi mdi-monitor-multiple"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Total Mata Pelajaran</div>
                            <h6>{{ App\Models\Mapel::count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
