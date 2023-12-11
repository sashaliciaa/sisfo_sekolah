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
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/logo.png" alt="">
                    </div>

                    <form class="user">

                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                placeholder="Password">
                        </div>

                        <center><input type="submit" class="btn btn-primary btn-user btn-block" id="btn_login"
                                value="Sign In" /></center>


                    </form>
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

                    <form class="user" method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <Label>NIS :</Label>
                            <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS..">
                        </div>


                        <div class="form-group">
                            <Label>Nama Siswa :</Label>
                            <input type="text" class="form-control" name="nm_siswa" placeholder="Masukkan Nama..">
                        </div>

                        <div class="form-group">
                            <Label>Jenis Kelamin :</Label><br>
                            <input type="Radio" name="gender" value="Laki-Laki"> Laki-laki &nbsp&nbsp&nbsp&nbsp
                            <input type="Radio" name="gender" value="Perempuan"> Perempuan
                        </div>

                        <div class="form-group">
                            <Label>Tanggal Lahir :</Label>
                            <input type="date" class="form-control" name="tgl_lahir"
                                placeholder="Masukkan Tanggal Lahir..">
                        </div>

                        <div class="form-group">
                            <Label>Alamat :</Label>
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>

                        <div class="form-group">
                            <Label>Foto Siswa :</Label>
                            <input type="file" class="form-control" name="gambar">
                        </div>


                        <center><input type="submit" class="btn btn-primary" value="Simpan Data" /></center>


                    </form>

                </div>
            </div>
        </div>
    </div>




    <!-- Bagian Penutup Isi Conten Template -->
@endsection
