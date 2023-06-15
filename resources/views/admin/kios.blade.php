@extends('layouts.app_admin')
@section('title', 'Data Kios')
@section('css')

@endsection
@section('content')
    <!-- KIOS DASHBOARD -->
    <section class="container-fluid px-5">

        {{-- <a href="{{ route('kios.create') }}">Tambah</a> --}}

        {{-- modal --}}
        <form action="{{ route('kios.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="kios">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Kios</h1>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="" class="mb-2">Pemilik</label>
                                        {{-- <input type="text" name="id_pemilik" placeholder="Pemilik" class="form-control"> --}}
                                        <select name="id_pemilik" id="" class="form-select">
                                            <option value="">Pilih pemilik</option>
                                            @foreach ($pemilik2 as $item)
                                                <option value="{{ $item->id_pemilik }}">{{ $item->nama_pemilik }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Nama Kios</label>
                                        <input type="text" name="nama_kios" placeholder="Kios" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Alamat</label>
                                        <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Deskripsi</label>
                                        <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Sertifikat</label>
                                        <input type="text" name="sertifikat" placeholder="Sertifikat"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Luas Tanah</label>
                                        <input type="text" name="luas_tanah" placeholder="Luas Tanah"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Luas Bangunan</label>
                                        <input type="text" name="luas_bangunan" placeholder="Luas Bangunan"
                                            class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="mb-2">Lantai</label>
                                        <input type="text" name="lantai" placeholder="Lantai" class="form-control">
                                    </div>
                                    <select name="wastafel" id="" class="form-select">
                                        <option value="">Wastafel</option>
                                        <option value="1">Ada</option>
                                        <option value="0">Tidak Ada</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Kamar Mandi</label>
                                        <input type="text" name="kamar_mandi" placeholder="Kamar Mandi"
                                            class="form-control">
                                    </div>
                                    <select name="wifi" id="" class="form-select">
                                        <option value="">Wifi</option>
                                        <option value="1">Ada</option>
                                        <option value="0">Tidak Ada</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Foto</label>
                                        <input type="file" name="foto_kios" placeholder="Nama" class="form-control"
                                            id="formFile">
                                    </div>
                                    <select name="status_terjual" id="" class="form-select">
                                        <option value="">Ketersediaan</option>
                                        <option value="1">Tersedia</option>
                                        <option value="0">Tidak Tersedia</option>
                                    </select>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Harga Sewa</label>
                                        <input type="text" name="harga_jual" placeholder="Harga Sewa"
                                            class="form-control">
                                    </div>
                                </div>
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
        <div class="main-content">
            <div class="row">
                <div class="card shadow" style="padding: 38px;border-color: transparent;">
                    <div class="row card-header border-0">
                        <div class="col-md-10">
                            <h3 class="mb-0">Data Kios</h3>
                        </div>
                        <div class="col-md-2 text-right">
                            <button data-bs-toggle="modal" data-bs-target="#kios" class="btn btn-primary"
                                style="float: right">Tambah Kios</button>
                        </div>
                    </div>
                    <table class="table table-hover mt-5 table-reponsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pemilik</th>
                                <th>Kios</th>
                                <th>Alamat</th>
                                <th>Deskripsi</th>
                                <th>Sertifikat</th>
                                <th>Luas Tanah</th>
                                <th>Luas Bangunan</th>
                                <th>Status Terjual</th>
                                <th>Harga Jual </th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kios as $kios)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kios->pemilik->nama_pemilik }}</td>
                                    <td>{{ $kios->nama_kios }}</td>
                                    <td>{{ $kios->alamat }}</td>
                                    <td>{{ Str::limit($kios->deskripsi, 5) }}</td>
                                    <td>{{ $kios->sertifikat }}</td>
                                    <td>{{ $kios->luas_tanah }}</td>
                                    <td>{{ $kios->luas_bangunan }}</td>
                                    <td>{{ $kios->status_terjual }}</td>
                                    <td>{{ $kios->harga_jual }}</td>
                                    <td>{{ $kios->foto_kios }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="me-2">
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#editkios{{ $kios->id_kios }}"><i
                                                        class="fa fa-pencil-alt" aria-hidden="true"></i></button>

                                                {{-- modal update --}}
                                                <form action="{{ route('kios.update', $kios->id_kios) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal fade" id="editkios{{ $kios->id_kios }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1>Data Kios</h1>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="form-group">

                                                                        <label for=""
                                                                            class="mb-2">Pemilik</label>
                                                                        {{-- <input type="text" name="id_pemilik" placeholder="Pemilik" class="form-control"> --}}
                                                                        <select name="id_pemilik" id=""
                                                                            class="form-select">
                                                                            <option value="{{ $kios->id_pemilik }}">
                                                                                Pilih pemilik
                                                                            </option>
                                                                            @foreach ($pemilik2 as $item)
                                                                                <option value="{{ $item->id_pemilik }}">
                                                                                    {{ $item->nama_pemilik }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Nama
                                                                            kios</label>
                                                                        <input type="text" name="nama_kios"
                                                                            placeholder="Kios" class="form-control"
                                                                            value="{{ $kios->nama_kios }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="mb-2">Alamat</label>
                                                                        <input type="text" name="alamat"
                                                                            placeholder="alamat" class="form-control"
                                                                            value="{{ $kios->alamat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="mb-2">Deskripsi</label>
                                                                        <input type="text" name="deskripsi"
                                                                            placeholder="Deskripsi" class="form-control"
                                                                            value="{{ $kios->deskripsi }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="mb-2">Sertifikat</label>
                                                                        <input type="text" name="sertifikat"
                                                                            placeholder="Sertifikat" class="form-control"
                                                                            value="{{ $kios->sertifikat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Luas
                                                                            Tanah</label>
                                                                        <input type="text" name="luas_tanah"
                                                                            placeholder="Luas Tanah" class="form-control"
                                                                            value={{ $kios->luas_tanah }}>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Luas
                                                                            Bangunan</label>
                                                                        <input type="text" name="luas_bangunan"
                                                                            placeholder="Luas Bangunan"
                                                                            class="form-control"
                                                                            value="{{ $kios->luas_bangunan }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="mb-2">Lantai</label>
                                                                        <input type="text" name="lantai"
                                                                            placeholder="Lantai" class="form-control"
                                                                            value="{{ $kios->lantai }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="mb-2">Wastafel</label>
                                                                        <input type="text" name="wastafel"
                                                                            placeholder="Wastafel" class="form-control"
                                                                            value={{ $kios->wastafel }}>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Kamar
                                                                            Mandi</label>
                                                                        <input type="text" name="kamar_mandi"
                                                                            placeholder="Kamar Mandi" class="form-control"
                                                                            value="{{ $kios->kamar_mandi }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Wifi</label>
                                                                        <input type="text" name="wifi"
                                                                            placeholder="Wifi" class="form-control"
                                                                            value={{ $kios->wifi }}>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Status
                                                                            Terjual</label>
                                                                        <input type="text" name="status_terjual"
                                                                            placeholder="Status Terjual"
                                                                            class="form-control"
                                                                            value="{{ $kios->status_terjual }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Harga
                                                                            Jual</label>
                                                                        <input type="text" name="harga_jual"
                                                                            placeholder="Harga Jual" class="form-control"
                                                                            value="{{ $kios->harga_jual }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="" class="mb-2">Foto</label>
                                                                        <input type="file" name="foto_kios"
                                                                            placeholder="Foto" class="form-control"
                                                                            id="formFile"
                                                                            value="{{ $kios->foto_kios }}">
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
                                                <form action="{{ route('kios.destroy', $kios->id_kios) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                        <i class="fa fa-trash" aria-hidden="true"></i></button>
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
    </section>
@endsection
@section('script')
    <script>
        $(function() {
            $("#wizard").steps({
                headerTag: "h4",
                bodyTag: "section",
                transitionEffect: "fade",
                enableAllSteps: true,
                transitionEffectSpeed: 500,
                onStepChanging: function(event, currentIndex, newIndex) {
                    if (newIndex === 1) {
                        $('.steps ul').addClass('step-2');
                    } else {
                        $('.steps ul').removeClass('step-2');
                    }
                    if (newIndex === 2) {
                        $('.steps ul').addClass('step-3');
                    } else {
                        $('.steps ul').removeClass('step-3');
                    }

                    if (newIndex === 3) {
                        $('.steps ul').addClass('step-4');
                        $('.actions ul').addClass('step-last');
                    } else {
                        $('.steps ul').removeClass('step-4');
                        $('.actions ul').removeClass('step-last');
                    }
                    return true;
                },
                labels: {
                    finish: "Order again",
                    next: "Next",
                    previous: "Previous"
                }
            });
            // Custom Steps Jquery Steps
            $('.wizard > .steps li a').click(function() {
                $(this).parent().addClass('checked');
                $(this).parent().prevAll().addClass('checked');
                $(this).parent().nextAll().removeClass('checked');
            });
            // Custom Button Jquery Steps
            $('.forward').click(function() {
                $("#wizard").steps('next');
            })
            $('.backward').click(function() {
                $("#wizard").steps('previous');
            })
            // Checkbox
            $('.checkbox-circle label').click(function() {
                $('.checkbox-circle label').removeClass('active');
                $(this).addClass('active');
            })
        })
    </script>
@endsection
