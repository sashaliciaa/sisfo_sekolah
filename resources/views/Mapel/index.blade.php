@extends('layout')
@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <a class="btn btn-success" href="{{ route('mapel.create') }}">+ Tambah Data</a>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO.</th>
            <th>Nama Mata Pelajaran</th>
            <th>Nama Guru</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>NO.</th>
            <th>Nama Mata Pelajaran</th>
            <th>Nama Guru</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($tbl_mapel as $mapel)
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mapel->nm_mapel }}</td>
            <td>{{ $mapel->nm_guru }}</td>
            <td>Edit | Hapus</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection