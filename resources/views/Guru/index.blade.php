@extends('layout')
@section('content')

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

<a class="btn btn-success" href="{{ route('guru.create') }}">+ Tambah Data</a>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>NUPTK</th>
                      <th>Nama Guru</th>
                      <th>Gender</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>NO.</th>
                      <th>NUPTK</th>
                      <th>Nama Guru</th>
                      <th>Gender</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($tbl_guru as $gr)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $gr->nuptk }}</td>
                      <td>{{ $gr->nm_guru }}</td>
                      <td>{{ $gr->gender }}</td>
                      <td>{{ $gr->tgl_lahir }}</td>
                      <td>{{ $gr->alamat }}</td>
                      <td>Edit | Hapus</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
          @endsection