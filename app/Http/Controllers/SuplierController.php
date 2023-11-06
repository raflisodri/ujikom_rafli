<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = Suplier::all();
        return view('home.suplier.index',compact(['suplier']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.suplier.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama'=>'required',
            'nama_perusahaan'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
        ]);
        Suplier::create([
            'nama'=>$request->nama,
            'nama_perusahaan'=>$request->nama_perusahaan,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/suplier')->with($validate);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suplier = Suplier::find($id);
        return view('home.suplier.edit',compact('suplier'));
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
        $validate = $request->validate([
            'nama'=>'required',
            'nama_perusahaan'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
        ]);
        $suplier = Suplier::find($id);
        $suplier->update([
            'nama'=>$request->nama,
            'nama_perusahaan'=>$request->nama_perusahaan,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            $request->except(['_token']),
        ]);
        return redirect('/suplier')->with($validate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();
        return redirect('/suplier');
    }
}
