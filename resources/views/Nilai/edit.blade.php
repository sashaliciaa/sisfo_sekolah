@extends('layout')
@section('content')
    <!-- Bagian Pembuka Isi Conten Template -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" align="center">FOTO SISWA</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ url('Foto_siswa/' . $siswa->gambar) }}" alt="">
                    </div>

                    <div class="form-group">
                        <Label>Foto Siswa :</Label>
                        <input type="file" class="form-control" name="gambar" value="{{ $siswa->gambar }}">
                    </div>

                </div>
            </div>
        </div>


        <div class="col-lg-8 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" align="center">DATA SISWA</h6>
                </div>
                <div class="card-body">

                    <form class="user" method="POST" action="{{ route('siswa.update', $siswa->id) }}"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="form-group">
                            <Label>NIS :</Label>
                            <input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}">
                        </div>


                        <div class="form-group">
                            <Label>Nama Siswa :</Label>
                            <input type="text" class="form-control" name="nm_siswa" value="{{ $siswa->nm_siswa }}">
                        </div>

                        <div class="form-group">
                            <Label>Jenis Kelamin :</Label><br>
                            @if ($siswa->gender == 'Laki Laki')
                                <input type="radio" name="gender" value="Laki Laki" checked="checked"> Laki Laki
                                <input type="radio" name="gender" value="Perempuan"> Perempuan
                            @elseif($siswa->gender == 'Perempuan')
                                <input type="radio" name="gender" value="Laki Laki"> Laki Laki
                                <input type="radio" name="gender" value="Perempuan" checked="checked"> Perempuan
                            @endif
                        </div>

                        <div class="form-group">
                            <Label>Tanggal Lahir :</Label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}">
                        </div>

                        <div class="form-group">
                            <Label>Alamat :</Label>
                            <textarea class="form-control" name="alamat">{{ $siswa->alamat }}</textarea>
                        </div>

                        <div class="form-group">
                            <Label>Foto Siswa :</Label>
                            <input type="file" class="form-control" name="gambar" value="{{ $siswa->gambar }}">
                        </div>

                        <center><input type="submit" class="btn btn-primary" value="Update Data" /></center>


                    </form>

                </div>
            </div>
        </div>
    </div>




    <!-- Bagian Penutup Isi Conten Template -->
@endsection
