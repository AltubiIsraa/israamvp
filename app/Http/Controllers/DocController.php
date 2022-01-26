<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Providers\ValidatedData;


class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $docs = Doc::get();              
        return view('Doc.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $doc = new Doc();
        $doc->user_id=Auth::id();
        $doc->subject=$request->input('subject');
        $doc->grade=$request->input('grade');
        $doc->title=$request->input('title');
        $doc->Desc=$request->input('Desc');
        $doc->save();

        return redirect()->route('Doc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function show(Doc $doc, $id)
    {
        $doc = Doc::find($id);
        
        return view('Doc.show', ["doc" => $doc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function edit(Doc $doc, $id)
    {
        $doc = Doc::find($id);
        return view('Doc.edit', ["doc"=>$doc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doc $doc, $id)
    {     
        $doc = Doc::find($id);
        $doc->user_id=Auth::id();
        $doc->subject=$request->input('subject');
        $doc->grade=$request->input('grade');
        $doc->title=$request->input('title');
        $doc->Desc=$request->input('Desc');
        $doc->save();
        $doc->update();
        return redirect()->route('Doc.index');
    }


    public function delete(Request $request, $id)
    {
        $doc = Doc::find($id);
        return view('Doc.delete', ["doc"=>$doc]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doc  $doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doc $doc, $id)
    {
        $doc = Doc::find($id);
        $doc->delete();
    }
}
