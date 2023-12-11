@extends('layout')
@section('content')

<!-- Bagian Pembuka Isi Conten Template -->
<!-- Content Row -->
<div class="row">
  <div class="col-lg-4 mb-4">
    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" align="center">FOTO GURU</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/logo.png" alt="">
        </div>

        <form class="user">

          <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
          </div>

          <div class="form-group">
            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
          </div>

          <center><input type="submit" class="btn btn-primary btn-user btn-block" id="btn_login" value="Sig In" /></center>


        </form>
      </div>
    </div>
  </div>


  <div class="col-lg-8 mb-4">
    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" align="center">DATA MATA PELAJARAN</h6>
      </div>
      <div class="card-body">

        <form class="user" method="POST" action="{{ route('mapel.store') }}">

          {{ csrf_field() }}

          <div class="form-group">
            <Label>Nama Mata Pelajaran :</Label>
            <input type="text" class="form-control" name="nm_mapel" placeholder="Masukkan Nama Mata Pelajaran..">
          </div>

          <Label>Nama guru :</Label>
          <div class="input-group mb-3">
            <select class="custom-select" name="nm_guru" id="nm_guru">
              @foreach ($tbl_guru as $guru)
              <option value="{{ $guru->nm_guru }}">{{ $guru->nm_guru }}</option>
              @endforeach
            </select>
          </div>

          <center><input type="submit" class="btn btn-primary" value="Simpan Data" /></center>


        </form>

      </div>
    </div>
  </div>
</div>




<!-- Bagian Penutup Isi Conten Template -->

@endsection