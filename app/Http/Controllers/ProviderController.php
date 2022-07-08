<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Provider::all();
        return view('provider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.create');
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
            'nama_provider' => 'required|min:1|max:100',
            'logo' => 'image|file|max:1024',
        ]);

        if ($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('upload');
        }

        Provider::create($validatedData);
        return redirect('/providers')->with('create', 'Provider Berhasil Ditambah!');
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
        $data = Provider::find($id);
        return view('provider.edit', compact('data'));
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
            'nama_provider' => 'required|min:1|max:100',
            'logo' => 'image|file|max:1024',
        ]);

        if ($request->file('logo')) {
            $provider = Provider::find($id);
            $provider->nama_provider = $request->input('nama_provider');
            $provider->logo = $request->file('logo')->store('upload');
            $provider->update();
            return redirect('/providers')->with('update', 'Provider Berhasil Diubah!');
        }

        $provider = Provider::find($id);
        $provider->nama_provider = $request->input('nama_provider');
        $provider->logo = $request->file('logo');
        $provider->update();
        return redirect('/providers')->with('update', 'Provider Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provider = Provider::find($id);
        $provider->delete();

        return redirect('/providers')->with('destroy', 'Provider Berhasil Dihapus!');
    }
}
