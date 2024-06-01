<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::all();
    

        return view('cast.tampil', ['casts' => $casts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required|integer|between:0,120',
            'bio' => 'required',
        ],
        [
            'nama.required' =>'nama harus diisi tidak boleh kosong',
            'umur.required' =>'umur harus diisi tidak boleh kosong',
            'bio.required' =>'bio harus diisi tidak boleh kosong',
        ]);

        $cast = new Cast;
 
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');
 
        $cast->save();
 
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a model by its primary key...
        $cast = Cast::find($id);
        return view('cast.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required|integer|between:0,120',
            'bio' => 'required',
        ],
        [
            'nama.required' =>'nama harus diisi tidak boleh kosong',
            'umur.required' =>'umur harus diisi tidak boleh kosong',
            'bio.required' =>'bio harus diisi tidak boleh kosong',
        ]);


        Cast::where('id', $id)
        ->update(
            [
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio'),
            ]
            );

            return redirect('/cast');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();

        return redirect('/cast');
    }
}
