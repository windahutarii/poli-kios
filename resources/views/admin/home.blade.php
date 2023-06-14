@extends('layouts.app_admin')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Dashboard Admin</h1>
            </div>
        </div>
    </div>
    <section class="container">
        <button data-bs-toggle="modal" data-bs-target="#pemilik" class="btn btn-primary">Tambah</button>
        {{-- <a href="{{ route('pemilik.create') }}">Tambah</a> --}}

        {{-- modal --}}
        <form action="{{ route('pemilik.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="pemilik">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Haloooo</h1>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="mb-2">Nama Pemilik</label>
                                <input type="text" name="nama_pemilik" placeholder="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-2">Alamat</label>
                                <input type="text" name="alamat" placeholder="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-2">Email</label>
                                <input type="email" name="email" placeholder="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-2">Perusahaan</label>
                                <input type="text" name="perusahaan" placeholder="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-2">No Hp</label>
                                <input type="text" name="no_hp" placeholder="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-2">No WA</label>
                                <input type="text" name="no_wa" placeholder="Nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-2">Foto</label>
                                <input type="file" name="foto" placeholder="Nama" class="form-control" id="formFile">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Tutup</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Perusahaan</th>
                    <th>No HP</th>
                    <th>No WA</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilik as $pemilik)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pemilik->nama_pemilik }}</td>
                        <td>{{ $pemilik->alamat }}</td>
                        <td>{{ $pemilik->email }}</td>
                        <td>{{ $pemilik->perusahaan }}</td>
                        <td>{{ $pemilik->no_hp }}</td>
                        <td>{{ $pemilik->no_wa }}</td>
                        <td>{{ $pemilik->foto }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="me-2">
                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editpemilik{{ $pemilik->id_pemilik }}">Edit</button>

                                    {{-- modal update --}}
                                    <form action="{{ route('pemilik.update', $pemilik->id_pemilik) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal fade" id="editpemilik{{ $pemilik->id_pemilik }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1>Haloooo</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">Nama Pemilik</label>
                                                            <input type="text" name="nama_pemilik" placeholder="Nama"
                                                                class="form-control" value="{{ $pemilik->nama_pemilik }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">Alamat</label>
                                                            <input type="text" name="alamat" placeholder="Nama"
                                                                class="form-control" value="{{ $pemilik->alamat }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">Email</label>
                                                            <input type="email" name="email" placeholder="Nama"
                                                                class="form-control" value="{{ $pemilik->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">Perusahaan</label>
                                                            <input type="text" name="perusahaan" placeholder="Nama"
                                                                class="form-control" value="{{ $pemilik->perusahaan }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">No Hp</label>
                                                            <input type="text" name="no_hp" placeholder="Nama"
                                                                class="form-control" value={{ $pemilik->no_hp }}>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">No WA</label>
                                                            <input type="text" name="no_wa" placeholder="Nama"
                                                                class="form-control" value="{{ $pemilik->no_wa }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" class="mb-2">Foto</label>
                                                            <input type="file" name="foto" placeholder="Nama"
                                                                class="form-control" id="formFile"
                                                                value="{{ $pemilik->foto }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" data-bs-dismiss="modal"
                                                            class="btn btn-danger">Tutup</button>
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <form action="{{ route('pemilik.destroy', $pemilik->id_pemilik) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
