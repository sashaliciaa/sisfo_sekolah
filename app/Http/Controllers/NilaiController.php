<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\facades\File;
use Illuminate\Support\facades\Storage;
use Illuminate\Support\facades\DB;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilais = db::table('nilai')
            ->join('tbl_siswa', 'tbl_siswa.id', '=', 'tbl_nilai.id_siswa')
            ->get();

        $ratas = DB::table(nilai)
            ->select(DB::raw("AVG(total) AS nilai_total"))
            ->get();

        return view('nilai.index', compact('nilais', 'ratas'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        return view('nilai.create', compact('siswas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'absensi' => 'required',
            'tugas' => 'required',
            'uts' => 'required',
            'uas' => 'required',
            'total' => 'required',
            'grade' => 'required',
            'id_siswa' => 'required',
        ]);
        $absensi = $request->input('absensi');
        $tugas = $request->input('tugas');
        $uts = $request->input('uts');
        $uas = $request->input('uas');

        $total = (0.1 * $absensi) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas);

        if ($total >= 85) {
            $grade = 'A';
        } else if ($total >= 70) {
            $grade = 'B';
        } else if ($total >= 55) {
            $grade = 'C';
        } else if ($total >= 40) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        Nilai::create([
            'absensi' => $request->absensi,
            'tugas' => $request->tugas,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'total' => $total,
            'grade' => $grade,
            'id_siswa' => $request->id_siswa
        ]);

        return redirect()->route('nilai.index')
            ->with('success', 'Data Nilai Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
