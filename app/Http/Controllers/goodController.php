<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class goodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $good = good::All();
        return view('good.index',compact('good'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('good.create');
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
            'name' => 'required',
            'price' => 'required',
            'stok' => 'required',
        ]);
        good::create($request->all());

        return redirect('/good')->with('status', 'berhasil menyimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function show(Good $good)
    {
        return view('good.detail', compact('good'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function edit(Good $good)
    {
        return view('good.edit', compact('good')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Good $good)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stok' => 'required',
        ]);
        good::where('id', $good->id)
                ->update([
                    'name'=>$request->name,
                    'price'=>$request->price,
                    'stok'=>$request->stok
                ]);
        return redirect('/good')->with('status', 'berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function destroy(Good $good)
    {
        good::destroy($good->id);
        return redirect('/good')->with('status', 'berhasil menghapus');
    }
}
