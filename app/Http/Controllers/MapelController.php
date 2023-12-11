<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\facades\File;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_mapel = Mapel::latest()->paginate(20);
        return view('mapel.index', compact('tbl_mapel'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tbl_guru = Guru::all();
        return view('mapel.create', [
            'tbl_guru' => $tbl_guru
        ]);
        // return view('mapel.create',compact('tbl_mapel'))->with('i', (request()->input('page',1)-1)*20);
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
            'nm_mapel' => 'required',
            'nm_guru' => 'required',
        ]);

        Mapel::create($request->all());
        return redirect()->route('mapel.index')
            ->with('success', 'Mapel Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbl_mapel = Mapel::latest()->paginate(20);
        return view('mapel.index', compact('tbl_mapel'))->with('i', (request()->input('page', 1) - 1) * 20);
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
        $Mapel = Mapel::find($id);
        $Mapel->delete();
        return redirect()->route('mapel.index')
            ->with('success', 'Mapel Delete Successfully.');
    }
}
