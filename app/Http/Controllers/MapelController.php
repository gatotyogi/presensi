<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::all();
        return view('pages.mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mapel.create');
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
            'kode_mapel' => 'required', 'string', 'unique:mapel',
            'nama_mapel' => 'required', 'string', 'max:40',
        ]);
        $mapel = Mapel::create([
            'kode_mapel' => $request->kode_mapel,
            'nama_mapel' => $request->nama_mapel,
            'keterangan' => $request->keterangan,
        ]);
        if ($mapel) {
            Alert::success('Success', 'mapel Berhasil Ditambahkan');
            return redirect()
                ->route('mapel.index');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        return view('pages.mapel.show', compact('mapel'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('pages.mapel.edit', compact('mapel'));
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
        $this->validate($request, [
            'nama_mapel' => 'required', 'string', 'max:40',
        ]);
        $mapel = Mapel::find($id);
        $mapel->kode_mapel = $request->kode_mapel;
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->keterangan = $request->keterangan;
        $mapel->save();
        if ($mapel) {
            Alert::success('Success', 'mapel Berhasil Diubah');
            return redirect()
                ->route('mapel.index');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Data Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        if ($mapel) {
            Alert::success('Success', 'mapel Berhasil Dihapus');
            return redirect()
                ->route('mapel.index');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Data Gagal Dihapus');
        }
    }
}
