@extends('layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Nilai</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <a class="btn btn-success" href="{{ route('nilai.create') }}">+ Tambah Data</a>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Nama Siswa</th>
                            <th>Nilai Absensi</th>
                            <th>Nilai Tugas</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Nilai Total</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        @foreach ($ratas as $rata)\
                        <tr>
                            <th colspan='7'>Nilai rata-rata Siswa</th>
                            <th colspan='2'> {{$rata-> nilai_total}}</th>
                        </tr>
                        @endforeach
                    </tfoot>
                    <tbody>
                        @foreach ($nilais as $nilai)
                            <tr>
                                <td>{{==$i}}</td>
                                <td>{{$nilai->nm_siswa}}</td>
                                <td>{{$nilai->absensi}}</td>
                                <td>{{$nilai->tugas}}</td>
                                <td>{{$nilai->uts}}</td>
                                <td>{{$nilai->uas}}</td>
                                <td>{{$nilai->total}}</td>
                                <td>{{$nilai->grade}}</td>
                                <td>EDIT || DELETE</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
