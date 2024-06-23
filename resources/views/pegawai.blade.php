@extends('layouts.layout')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3>Pegawai</h3>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="fas fa-plus"></i> Tambah Pegawai
        </button>
    </div>

    <div class="table-responsive">
        <table id="table-pegawai" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $pegawai)
                    <tr>
                        <td>
                            @if ($pegawai->photo == null)
                                <span class="badge bg-danger">Tidak Ada Foto</span>
                            @else
                                <img class="img-thumbnail" src="{{ asset('images/' . $pegawai->photo) }}"
                                    alt="{{ $pegawai->name }}" width="50">
                            @endif
                        </td>
                        <td>{{ $pegawai->name }}</td>
                        <td>{{ $pegawai->email }}</td>
                        <td>{{ $pegawai->phone_number }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                    data-bs-target="#detailModal{{ $pegawai->id }}">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $pegawai->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $pegawai->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addEmployeeForm" method="POST" action="{{ route('employee.store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addModalLabel">Tambah Data Pegawai</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="photo" class="form-label">Foto</label>
                            <input type="file" class="form-control border px-3 @error('photo') is-invalid @enderror"
                                id="photo" name="photo">
                            @error('photo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control border px-3 @error('name') is-invalid @enderror"
                                id="name" name="name" placeholder="Masukkan Nama" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control border px-3 @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone_number" class="form-label">No HP</label>
                            <input type="text"
                                class="form-control border px-3 @error('phone_number') is-invalid @enderror"
                                id="phone_number" name="phone_number" placeholder="Masukkan No Hp"
                                value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control border px-3 @error('alamat') is-invalid @enderror"
                                id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="domisili" class="form-label">Domisili</label>
                            <select class="form-select border px-3 @error('domisili') is-invalid @enderror" id="domisili"
                                name="domisili">
                                <option value="">Pilih Domisili</option>
                                <option value="Jawa Timur" {{ old('domisili') == 'Jawa Timur' ? 'selected' : '' }}>Jawa
                                    Timur</option>
                                <option value="Jawa Tengah" {{ old('domisili') == 'Jawa Tengah' ? 'selected' : '' }}>Jawa
                                    Tengah</option>
                                <option value="Jawa Barat" {{ old('domisili') == 'Jawa Barat' ? 'selected' : '' }}>Jawa
                                    Barat</option>
                            </select>
                            @error('domisili')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="submitForm">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->

    {{-- Detail Modal --}}
    @foreach ($employees as $pegawai)
        <div class="modal fade" id="detailModal{{ $pegawai->id }}" tabindex="-1" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Detail Pegawai</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('images/' . $pegawai->photo) }}" class="rounded-circle img-thumbnail"
                                alt="Foto Pegawai" width="150">
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3"><strong>Nama:</strong></div>
                            <div class="col-sm-9">{{ $pegawai->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3"><strong>Email:</strong></div>
                            <div class="col-sm-9">{{ $pegawai->email }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3"><strong>No HP:</strong></div>
                            <div class="col-sm-9">{{ $pegawai->phone_number }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3"><strong>Alamat:</strong></div>
                            <div class="col-sm-9">{{ $pegawai->alamat }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3"><strong>Domisili:</strong></div>
                            <div class="col-sm-9">{{ $pegawai->domisili }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Delete Modal -->
    @foreach ($employees as $pegawai)
        <div class="modal fade" id="deleteModal{{ $pegawai->id }}" tabindex="-1"
            aria-labelledby="deleteModalLabel-{{ $pegawai->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel-{{ $pegawai->id }}">Hapus Data Pegawai</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yakin ingin menghapus {{ $pegawai->name }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form id="deleteForm{{ $pegawai->id }}"
                            action="{{ route('employee.delete', ['id' => $pegawai->id]) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($employees as $pegawai)
        <div class="modal fade" id="editModal{{ $pegawai->id }}" tabindex="-1"
            aria-labelledby="editModalLabel-{{ $pegawai->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel-{{ $pegawai->id }}">Edit Data Pegawai</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/dashboard/employee/updateimage/' . $pegawai->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('images/' . $pegawai->photo) }}" alt=""
                                            width="100%">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="" for="foto">Foto</label>
                                        <input type="file"
                                            class="form-control border @error('imageupdate') is-invalid @enderror"
                                            id="foto" name="imageupdate">
                                        @error('imageupdate')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <button type=" submit" class="btn mt-3"
                                            style="background-color: #228896;color: white;">Perbarui
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('employee.update', ['id' => $pegawai->id]) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nameupdate') is-invalid @enderror" id="name" name="nameupdate" value="{{ $pegawai->name }}" required>
                                @error('nameupdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('emailupdate') is-invalid @enderror" id="email" name="emailupdate" value="{{ $pegawai->email }}" required>
                                @error('emailupdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">No HP</label>
                                <input type="text" class="form-control @error('phone_numberupdate') is-invalid @enderror" id="phone_number" name="phone_numberupdate" value="{{ $pegawai->phone_number }}" required>
                                @error('phone_numberupdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamatupdate') is-invalid @enderror" id="alamat" name="alamatupdate" value="{{ $pegawai->alamat }}" required>
                                @error('alamatupdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="domisili" class="form-label">Domisili</label>
                                <select class="form-select @error('domisiliupdate') is-invalid @enderror" id="domisili" name="domisiliupdate" required>
                                    <option value="">Pilih Domisili</option>
                                    <option value="Jawa Timur" {{ $pegawai->domisili == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
                                    <option value="Jawa Tengah" {{ $pegawai->domisili == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah</option>
                                    <option value="Jawa Barat" {{ $pegawai->domisili == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                                </select>
                                @error('domisiliupdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
