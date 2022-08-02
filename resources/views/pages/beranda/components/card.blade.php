@php
$rfidMode = App\Models\RfidMode::get()->first();

@endphp


<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h3>Absen : {{ $rfidMode->status == 1 ? 'MASUK' : 'PULANG' }}</h3>
                <h3>Silahkan Tempelkan Kartu RFID Anda</h3>
                <div class="text-center">
                    <img src="{{ asset('images/rfid.gif') }}" width="300px"> <br>
                    <img class="text-cneter" src="{{ asset('images/animasi2.gif') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <h1>History</h1>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Data</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Waktu</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Indra Basuki</td>
                            <td>{{ date('Y-m-d h:i:s') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
