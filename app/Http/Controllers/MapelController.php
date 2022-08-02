<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MapelController extends Controller
{
    public function __construct()
    {
    }


    public function index()
    {
        return 1;
    }

    public function create()
    {
        return view('pages.mapel.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_mapel' => 'required', 'string', 'unique:mapel', 'max:8',
            'nama_mapel' => 'required', 'string', 'email', 'max:30',
            'keterangan' => 'required'
        ]);

        $mapel = Mapel::create([
            'kode_mapel'    => $request->kode_mapel,
            'nama_mapel'    => $request->nama_mapel,
            'keterangan'    => $request->keterangan,
            'nip'           => $request->nip,

        ]);
        if ($mapel) {
            Alert::success('Berhasil', 'Data Mapel Berhasil Ditambahkan');
            return redirect()
                ->route('mapel.index');
        } else {
            Alert::error('Gagal', 'Data Mapel Gagal Ditambahkan');
            return redirect()
                ->back();
        }
    }


    public function show(Mapel $mapel)
    {
        return view('pages.mapel.detail', compact('mapel'));
    }


    public function edit(Mapel $keas)
    {
        return view('pages.kelas.edit', compact('kelas'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_mapel' => 'required', 'string',
            'keterangan' => 'required'
        ]);

        $mapel = Mapel::findOrFail($id);

        $mapel->update([
            'nama_mapel' => $request->nama_mapel,
            'ketrangan' => $request->ketrangan,
            'nip' => $request->nip,
        ]);

        if ($mapel) {
            Alert::success('Berhasil', 'Data mapel Berhasil Diubah');
            return redirect()
                ->route('mapel.index');
        } else {
            Alert::error('Gagal', 'Data mapel Gagal Diubah');
            return redirect()
                ->back();
        }
    }

    public function destroy($id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->delete();

        if ($mapel) {
            Alert::success('Berhasil', 'Data Mapel Berhasil Dihapus');
            return redirect()
                ->route('mapel.index');
        } else {
            return redirect()
                ->route('mapel.index');
        }
    }
}
