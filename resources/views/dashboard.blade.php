@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-2 mt-3">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">group</i> 
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total</p>
                        <h4 class="mb-0">{{ $employeeCount }} Pegawai</h4>
                    </div>
                </div>
        
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span>Jumlah Total Keseluruhan Pegawai</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-2 mt-3">
                <div class="card-header p-3 pt-2 bg-transparent">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">location_city</i> 
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Domisili</p>
                        <h5 class="mb-0">Jawa Timur: {{$employeeJatim}}</h5>
                        <h5 class="mb-0">Jawa Tengah: {{$employeeJateng}}</h5>
                        <h5 class="mb-0">Jawa Barat: {{$employeeJabar}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card mb-2 mt-3">
                <div class="card-header p-3 pt-2 bg-transparent">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">group</i> 
                    </div>
                    <div class="text-end pt-1">
                        <h5 class="text-uppercase mb-0">Manajemen Data Pegawai</h5>
                    </div>
                </div>
                <div class="card-body">
                    <p class="mb-0">
                        Fitur-fitur untuk manajemen pegawai termasuk:
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle"></i> <span>Melihat dan mengelola informasi pegawai secara efisien.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Mengatur dan melihat detail pegawai dengan mudah.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Menyediakan akses cepat ke data penting terkait data pegawai.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
