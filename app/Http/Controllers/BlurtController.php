<?php

namespace App\Http\Controllers;

use App\Models\Blurt;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlurtRequest;

class BlurtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blurts.index', [
            'blurts' => Blurt::with('user')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreBlurtRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlurtRequest $request)
    {
        $validated = $request->validated();
        $request->user()->blurts()->create($validated);

        return redirect(route('blurts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blurt  $blurt
     * @return \Illuminate\Http\Response
     */
    public function show(Blurt $blurt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blurt  $blurt
     * @return \Illuminate\Http\Response
     */
    public function edit(Blurt $blurt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blurt  $blurt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blurt $blurt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blurt  $blurt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blurt $blurt)
    {
        //
    }
}
