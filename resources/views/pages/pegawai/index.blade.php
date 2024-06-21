@extends('layouts.dashboard')

@section('content')
    <div class="d-flex align-items-center justify-content-between"></div>
    <h3>Pegawai</h3>
    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModal" <i class="fas fa-plus"></i> Tambah
        Pegawai
    </button>

    <table id="table-pegawai" class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $pegawai)
                <tr>
                    <td>
                        @if ($pegawai->avatar == null)
                            <span class="badge bg-danger">Tidak Ada Foto</span>
                        @else
                            <img class="img-thumbnail" src="{{ asset('storage/' . $pegawai->avatar) }}"
                                alt="{{ $pegawai->name }}" width="50">
                        @endif
                    </td>
                    <td>{{ $pegawai->name }}</td>
                    <td>{{ $pegawai->email }}</td>
                    <td>{{ $pegawai->phone_number }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        // id -> #, class -> ., element -> element, attribute -> [attribute]
        // contoh atribute name -> [name='value']
        $(document).ready(function() {
            new DataTable('#table-pegawai');
        });
    </script>
@endpush
