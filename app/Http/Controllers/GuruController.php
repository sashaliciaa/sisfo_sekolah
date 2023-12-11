<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\facades\File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_guru = Guru::latest()->paginate(20);
        return view('guru.index',compact('tbl_guru'))->with('i', (request()->input('page',1)-1)*20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbl_guru = Guru::latest()->paginate(20);
        return view('guru.create',compact('tbl_guru'))->with('i', (request()->input('page',1)-1)*20);
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
            'nuptk' => 'required',
            'nm_guru' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Guru::create($request->all());
        return redirect()->route('guru.index')
                        ->with('success','Guru Created Successfully.')
                        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbl_guru = Guru::latest()->paginate(20);
        return view('guru.index',compact('tbl_guru'))->with('i', (request()->input('page',1)-1)*20);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
