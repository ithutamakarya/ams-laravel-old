<?php

namespace App\Http\Controllers;

use App\type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function main()
    {
        return view('parameter.auditee');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = type::all();
        return view('type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        type::create($request->all());

        return redirect(route('type.index'))->with('success', 'Data telah disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = type::where('id', $id)->first();

        return view('type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = type::where('id', $id)->first();

        $type->update($request->all());

        return redirect(route('type.index'))->with('success', 'Data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = type::findOrFail($id);

        $type->delete();

        return redirect(route('type.index'))->with('success', 'Data telah dihapus');
    }
}
