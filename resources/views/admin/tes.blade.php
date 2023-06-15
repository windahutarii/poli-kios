<div class="main-content">
    <div class="container mt-7">
        <!-- Table -->
        <h2 class="mb-5">Tables Example</h2>
        <div class="row">

            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Data Pemilik</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Perusahaan</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">No WA</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pemilik as $pemilik)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">

                                            </div>
                                        </th>
                                        <td scope="row">{{ $loop->iteration }}</td>
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
                                                    <form action="{{ route('pemilik.update', $pemilik->id_pemilik) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal fade"
                                                            id="editpemilik{{ $pemilik->id_pemilik }}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1>Data Pemilik</h1>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">Nama
                                                                                Pemilik</label>
                                                                            <input type="text" name="nama_pemilik"
                                                                                placeholder="Nama" class="form-control"
                                                                                value="{{ $pemilik->nama_pemilik }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Alamat</label>
                                                                            <input type="text" name="alamat"
                                                                                placeholder="Nama" class="form-control"
                                                                                value="{{ $pemilik->alamat }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Email</label>
                                                                            <input type="email" name="email"
                                                                                placeholder="Nama" class="form-control"
                                                                                value="{{ $pemilik->email }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Perusahaan</label>
                                                                            <input type="text" name="perusahaan"
                                                                                placeholder="Nama" class="form-control"
                                                                                value="{{ $pemilik->perusahaan }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">No
                                                                                Hp</label>
                                                                            <input type="text" name="no_hp"
                                                                                placeholder="Nama" class="form-control"
                                                                                value={{ $pemilik->no_hp }}>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">No
                                                                                WA</label>
                                                                            <input type="text" name="no_wa"
                                                                                placeholder="Nama" class="form-control"
                                                                                value="{{ $pemilik->no_wa }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Foto</label>
                                                                            <input type="file" name="foto"
                                                                                placeholder="Nama" class="form-control"
                                                                                id="formFile"
                                                                                value="{{ $pemilik->foto }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" data-bs-dismiss="modal"
                                                                            class="btn btn-danger">Tutup</button>
                                                                        <button type="submit"
                                                                            class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div>
                                                    <form action="{{ route('pemilik.destroy', $pemilik->id_pemilik) }}"
                                                        method="POST" enctype="multipart/form-data">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
