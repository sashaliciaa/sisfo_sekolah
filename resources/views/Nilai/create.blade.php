@extends('layout')
@section('content')
    <!-- Bagian Pembuka Isi Conten Template -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-2 font-weight-bold text-primary" align="center">DATA NILAI</h6>
                </div>
                <div class="card-body">

                    <form class="user" method="POST" action="{{ route('nilai.store') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <Label>Nama Siswa :</Label>
                            <select name="id_siswa" class="form-control">
                                <option>~Pilih Nama Siswa~</option>
                                @foreach ($siswas as $siswa)
                                    <option value="{{ $siswa->id }}">{{ $siswa->nm_siswa }} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <Label>Nilai Absensi :</Label>
                            <input type="number" class="form-control" name="absensi">
                        </div>

                        <div class="form-group">
                            <Label>Nilai Tugas :</Label>
                            <input type="number" class="form-control" name="tugas">
                        </div>

                        <div class="form-group">
                            <Label>Nilai UTS :</Label>
                            <input type="number" class="form-control" name="uts">
                        </div>

                        <div class="form-group">
                            <Label>Nilai UAS :</Label>
                            <input type="number" class="form-control" name="uas">
                        </div>
                        <center><input type="submit" class="btn btn-primary" value="Simpan Data"></center>


                    </form>

                </div>
            </div>
        </div>
    </div>




    <!-- Bagian Penutup Isi Conten Template -->
@endsection
