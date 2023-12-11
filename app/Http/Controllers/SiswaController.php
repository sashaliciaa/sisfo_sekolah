<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\facades\File;
use Illuminate\Support\facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::latest()->paginate(20);
        return view('siswa.index', compact('siswas'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'nm_siswa' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = "Foto_Siswa";
        $file->move($tujuan_upload, $nama_file);

        Siswa::create([
            'nis' => $request->nis,
            'nm_siswa' => $request->nm_siswa,
            'gender' => $request->gender,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'gambar' => $nama_file,
        ]);
        return redirect()->route('siswa.index')
            ->with('success', 'Siswa Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis' => 'required',
            'nm_siswa' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        if ($request->file('gambar')) {
            unlink(public_path('Foto_Siswa/' . $siswa->gambar));
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = "Foto_Siswa";
            $file->move($tujuan_upload, $nama_file);

            $siswa->update([
                'nis' => $request->nis,
                'nm_siswa' => $request->nm_siswa,
                'gender' => $request->gender,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'gambar' => $nama_file,
            ]);
        } else {
            $siswa->update($request->all());
        }

        return redirect()->route('siswa.index')
            ->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        unlink(public_path('Foto_Siswa/' . $siswa->gambar));
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Berhasil Dihapus');
    }
}
