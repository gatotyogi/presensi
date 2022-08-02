<?php

namespace App\Http\Controllers;

use App\DataTables\KelasDataTable;
use App\Models\Kelas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    public function __construct()
    {
    }


    public function index(KelasDataTable $dataTable)
    {
        return $dataTable->render('pages.kelas.index');
    }

    public function create()
    {
        return view('pages.kelas.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_kelas' => 'required', 'string', 'unique:kelas', 'max:8',
            'nama_kelas' => 'required', 'string', 'email', 'max:30',
            'keterangan' => 'required'
        ]);

        $kelas = Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'keterangan' => $request->keterangan,

        ]);
        if ($kelas) {
            Alert::success('Berhasil', 'Data Kelas Berhasil Ditambahkan');
            return redirect()
                ->route('kelas.index');
        } else {
            Alert::error('Gagal', 'Data Kelas Gagal Ditambahkan');
            return redirect()
                ->back();
        }
    }


    public function show(Kelas $kelas)
    {
        return view('pages.kelas.detail', compact('kelas'));
    }


    public function edit(Kelas $kelas)
    {
        return view('pages.kelas.edit', compact('kelas'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kelas' => 'required', 'string',
            'keterangan' => 'required'
        ]);

        $kelas = Kelas::findOrFail($id);

        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'ketrangan' => $request->ketrangan,

        ]);

        if ($kelas) {
            Alert::success('Berhasil', 'Data Kelas Berhasil Diubah');
            return redirect()
                ->route('kelas.index');
        } else {
            Alert::error('Gagal', 'Data Kelas Gagal Diubah');
            return redirect()
                ->back();
        }
    }

    public function destroy(Kelas $kelas)
    {

        $kelas->delete();
        if ($kelas) {
            Alert::success('Berhasil', 'Data Kelas Berhasil Dihapus');
            return redirect()
                ->route('kelas.index');
        }
        return
            Alert::error('Gagal', 'Data Kelas Gagal Dihapus');
        redirect()->route('kelas.index');
    }
}
