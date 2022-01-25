<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;

class SubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Doc.sub');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doc.sub');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = new Sub();

        $sub->title = $request->input('subject');
        $sub->auther_id = $request->input('level');
        $sub->no_of_pages = $request->input('title');
        $desc = $request->input('desc', []); 
        // $sub->user_id=Auth::id();
        $sub->save();

        return redirect()->route('Doc.subject');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function show(Sub $sub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function edit(Sub $sub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sub $sub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub  $sub
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub $sub)
    {
        //
    }
}
