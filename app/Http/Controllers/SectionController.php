<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();

        return view('section.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Section::create(
            $request->except(['_token', '_method'])
        );
        return redirect()->route('sections.index')->with('message', 'section created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $section = Section::findorFail($id);
        return view('section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Section::findorFail($id);
        $post->update($request->except(['_token', '_method']));
        return redirect()->route('sections.index')->with('message', 'section update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Section::destroy($id);
        return redirect()->route('sections.index')->with('message', 'section deleted');
    }
}
