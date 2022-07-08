<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('paket')
            ->join('providers', 'paket.provider', '=', 'providers.id_provider')
            ->get();
        return view('paket.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::all();
        return view('paket.create', compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'provider' => 'string|max:50',
            'nama_paket' => 'string|max:100',
            'harga' => 'numeric',
            'ket_paket' => 'string|max:500',
        ]);

        Paket::create($validatedData);
        return redirect('/paket')->with('create', 'Paket Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('paket')
            ->join('providers', 'paket.provider', '=', 'providers.id_provider')
            ->where('id_paket', $id)
            ->get();
        $providers = Provider::all();
        return view('paket.edit', compact('data', 'providers'));
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
        $request->validate([
            'provider' => 'string|max:50',
            'nama_paket' => 'string|max:100',
            'harga' => 'numeric',
            'ket_paket' => 'string|max:500',
        ]);

        $paket = Paket::find($id);
        $paket->provider = $request->input('provider');
        $paket->nama_paket = $request->input('nama_paket');
        $paket->harga = $request->input('harga');
        $paket->ket_paket = $request->input('ket_paket');
        $paket->update();

        return redirect('/paket')->with('update', 'Paket Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = Paket::find($id);
        $paket->delete();
        return redirect('/paket')->with('destroy', 'Provider Berhasil Dihapus!');
    }
}
