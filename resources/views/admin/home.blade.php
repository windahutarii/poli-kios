@extends('layouts.app_admin')
@section('title', 'Dashboard Admin')
<link href="{{ asset('css/modal.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<style>
    th {
        color: #000;
    }

    td {
        vertical-align: middle;
    }

    thead {
        background-color: #FEA116;
    }

    thead tr th {
        color: #FFF;
    }
</style>
@section('content')
    <div class="container">
        <div class="">
            <div class="card-body">
                <h1 class="text-center">Dashboard Admin</h1>
            </div>
        </div>
    </div>
    <!-- PEMILIK DASHBOARD -->
    <section class="container" style="max-width: 2720px !important;">

        {{-- <a href="{{ route('pemilik.create') }}">Tambah</a> --}}

        {{-- modal --}}
        <form action="{{ route('pemilik.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal fade" id="pemilik">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Data Pemilik</h1>
                        </div>
                        <!-- SECTION 1 -->

                        <div class="modal-body ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="" class="mb-2">Nama Pemilik</label>
                                        <input type="text" name="nama_pemilik" placeholder="Nama" class="form-control">
                                    </div>
                                    <div class="form-group ">
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
                                </div>
                                <!-- div 2-->

                                <div class="col-md-6">
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
                                        <input type="file" name="foto" placeholder="Nama" class="form-control"
                                            id="formFile">
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
            <div class="container mt-7">
                <!-- Table -->
                <div class="row">
                    <div class="card shadow" style="padding: 38px;border-color: transparent;">
                        <div class="row card-header border-0">
                            <div class="col-md-10">
                                <h3 class="mb-0">Data Pemilik</h3>
                            </div>
                            <div class="col-md-2 text-right">
                                <button data-bs-toggle="modal" data-bs-target="#pemilik" class="btn btn-primary"
                                    style="float: right">Tambah Pemilik</button>
                            </div>
                        </div>
                        <table class="table table-hover mt-5">
                            <thead>
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
                                                        data-bs-target="#editpemilik{{ $pemilik->id_pemilik }}"><i
                                                            class="fa fa-pencil-alt" aria-hidden="true"></i></button>

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
            </div>
    </section>





    <!-- KIOS DASHBOARD -->
    <section class="container" style="max-width: 2720px !important;">

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
                                        <input type="text" name="deskripsi" placeholder="Deskripsi"
                                            class="form-control">
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
                                    <div class="form-group">
                                        <label for="" class="mb-2">Wastafel</label>
                                        <input type="text" name="wastafel" placeholder="Wastafel"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Kamar Mandi</label>
                                        <input type="text" name="kamar_mandi" placeholder="Kamar Mandi"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Wifi</label>
                                        <input type="text" name="wifi" placeholder="Wifi" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Foto</label>
                                        <input type="file" name="foto_kios" placeholder="Nama" class="form-control"
                                            id="formFile">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="mb-2">Ketersediaan</label>
                                        <input type="text" name="status_terjual" placeholder="Ketersediaan"
                                            class="form-control">
                                    </div>
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
            <div class="container mt-7">
                <!-- Table -->
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
                        <table class="table table-hover mt-5"
                            style="width: 100%; table-layout: fixed; overflow-wrap: break-word;">
                            <thead>
                                <tr>
                                    <th style="width: 3%">No</th>
                                    <th style="width: 10%">Pemilik</th>
                                    <th style="width: 13%">Kios</th>
                                    <th style="width: 17%">Alamat</th>
                                    <th style="width: 23%">Deskripsi</th>
                                    <th style="width: 3%">Sertifikat</th>
                                    <th style="width: 5%">Luas Tanah</th>
                                    <th style="width: 5%">Luas Bangunan</th>
                                    <th style="width: 3%">Status Terjual</th>
                                    <th style="width: 13%">Harga Jual </th>
                                    <th style="width: 10%">Foto</th>
                                    <th style="width: 9%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kios as $kios)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kios->pemilik->nama_pemilik }}</td>
                                        <td>{{ $kios->nama_kios }}</td>
                                        <td>{{ $kios->alamat }}</td>
                                        <td>{{ $kios->deskripsi }}</td>
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
                                                    <form action="{{ route('kios.update', $kios->id_kios) }}"
                                                        method="POST" enctype="multipart/form-data">
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
                                                                                    <option
                                                                                        value="{{ $item->id_pemilik }}">
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
                                                                                placeholder="Deskripsi"
                                                                                class="form-control"
                                                                                value="{{ $kios->deskripsi }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Sertifikat</label>
                                                                            <input type="text" name="sertifikat"
                                                                                placeholder="Sertifikat"
                                                                                class="form-control"
                                                                                value="{{ $kios->sertifikat }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">Luas
                                                                                Tanah</label>
                                                                            <input type="text" name="luas_tanah"
                                                                                placeholder="Luas Tanah"
                                                                                class="form-control"
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
                                                                                placeholder="Wastafel"
                                                                                class="form-control"
                                                                                value={{ $kios->wastafel }}>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="" class="mb-2">Kamar
                                                                                Mandi</label>
                                                                            <input type="text" name="kamar_mandi"
                                                                                placeholder="Kamar Mandi"
                                                                                class="form-control"
                                                                                value="{{ $kios->kamar_mandi }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Wifi</label>
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
                                                                                placeholder="Harga Jual"
                                                                                class="form-control"
                                                                                value="{{ $kios->harga_jual }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for=""
                                                                                class="mb-2">Foto</label>
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
                                                    <form action="{{ route('kios.destroy', $kios->id_kios) }}"
                                                        method="POST" enctype="multipart/form-data">
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
            </div>
    </section>
@endsection



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
