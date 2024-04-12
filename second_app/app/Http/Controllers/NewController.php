<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->paginate(5);
        return view('News.index',compact('news'))->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('News.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        News::create($request->all());
        return redirect()->route('News.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) 
    {
        $news = news::find($id);
        return view('News.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = news::find($id);
        return view('News.edit ',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, News $news)
    {
        $news = news::find($id);
        // $news->name = $request->input('name');
        // $news->details = $request->input('details');
        
        // $news->save();
     
        $news->update($request->all());
        return redirect()->route('News.index')->with(['success'=>"deleted successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = News::find($id);
        $id->delete();


        return redirect()->route('News.index')->with(['success'=>"deleted successfully"]);
    }
}
