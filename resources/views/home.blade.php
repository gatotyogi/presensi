@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <x-page-title>
        <x-slot name="title"><i class="mdi mdi-home"></i> Home</x-slot>
        <x-slot name="item">
            <li class="breadcrumb-item active"></li>
        </x-slot>
    </x-page-title>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row g-0 align-items-center">
                    <div class="col-md-3">
                        <img class="card-img img-fluid" src="{{ asset('images/21421.jpg') }}" width="" alt="Card image">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h2 class="card-text">Welcome , {{ Str::upper(Auth::user()->name) }}</h2>
                            <h5 class="card-text">SMK IMI - Sistem Presensi</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
