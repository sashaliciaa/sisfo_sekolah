@extends('layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <a class="btn btn-success" href="{{ route('siswa.create') }}">+ Tambah Data</a>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Foto Siswa</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Gender</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO.</th>
                            <th>Foto Siswa</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Gender</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($siswas as $siswa)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img width="100" src="{{ url('Foto_Siswa/' . $siswa->gambar) }}"></td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nm_siswa }}</td>
                                <td>{{ $siswa->gender }}</td>
                                <td>{{ $siswa->tgl_lahir }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>

                                    <form action ="{{ route('siswa.destroy', $siswa->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <a type="submit" class="btn btn-warning"
                                            href="{{ route('siswa.edit', $siswa->id) }}"><i class="fas fa-edit"></i>
                                            Edit</a>

                                        <button type="submit" class="btn btn-danger"
                                            onclick="javascript: return confirm('Apakah Anda Ingin Menghapus Data Ini?')"><i
                                                class="fas fa-trash"></i> Hapus</button>

                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
