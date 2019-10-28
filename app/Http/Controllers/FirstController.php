<?php

namespace App\Http\Controllers;

use App\First;
use App\Tips;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_user = First::all();
        $data_tips = Tips::inRandomOrder()->first();

        return view('first.index', compact('data_user', 'data_tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('first.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_val =  request()->validate(array(
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'tensi_user' => 'required|numeric',
        ));

        First::create($data_val);

        return redirect('/first')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function show(First $first)
    {
        return view('first.show', compact('first'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function edit(First $first)
    {
        return view('first.edit', compact('first'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, First $first)
    {
        $data_val = request()->validate(array(
            'body' => 'required',
        ));

        $first->update($data_val);

        return redirect('/first')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\First  $first
     * @return \Illuminate\Http\Response
     */
    public function destroy(First $first)
    {
        First::destroy($first->id);

        return redirect('/first')->with('success', 'Data Deleted');
    }
}
