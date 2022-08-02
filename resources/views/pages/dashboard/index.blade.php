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
                <div class="card-body" title="admin Total = {{ $data['total_admin'] }}">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-account-supervisor"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Admin</div>
                            <h6>{{ $data['total_admin'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body" title="Guru Total = {{ $data['total_guru'] }}">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-success text-success rounded">
                                <i class="mdi mdi-account-key"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Guru</div>
                            <h6>{{ $data['total_guru'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body" title="Siswa Total = {{ $data['total_guru'] }}">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-success text-success rounded">
                                <i class="mdi mdi-account-key"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Siswa</div>
                            <h6>{{ $data['total_guru'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body" title="Total Kelas = {{ $data['total_kelas'] }}">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-primary text-primary rounded">
                                <i class="mdi mdi-apps"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Kelas</div>
                            <h6>{{ $data['total_kelas'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body" title="Total Mata Pelajaran = {{ $data['total_mapel'] }}">
                    <div class=" media">
                        <div class="avatar-sm font-size-20 mr-3">
                            <span class="avatar-title bg-soft-success text-success rounded">
                                <i class="mdi mdi-more"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <div class="font-size-16">Mata Pelajaran</div>
                            <h6>{{ $data['total_mapel'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/chart.js') }}"></script>
    <script type="text/javascript">
        var ctx = document.getElementById("mataChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($label); ?>,
                datasets: [{
                    label: 'Total User :',
                    backgroundColor: '#ADD8E6',
                    borderColor: '#93C3D2',
                    data: <?php echo json_encode($chart_user); ?>
                }],
                options: {
                    animation: {
                        onProgress: function(animation) {
                            progress.value = animation.animationObject.currentStep / animation.animationObject
                                .numSteps;
                        }
                    }
                }
            },
        });
    </script> --}}
@endpush
