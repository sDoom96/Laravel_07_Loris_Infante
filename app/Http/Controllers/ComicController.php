<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $comics = Comic::all();
        return view('comics',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('img');
        
        Comic::create([
            'title'=> $request->title,
            'year'=> $request->year,
            'description'=> $request->description,
            'img'=> $file ? $file->store('public/images') : 'public/images/default.png'
        ]);
        
        return redirect()->route('comics.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $data)
    {
        return view('comics.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $data)
    {
        return view('comics.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $data)
    {
        $file = $request->file('img');
        
        $data->update([
            'title'=> $request->title,
            'year'=> $request->year,
            'description'=> $request->description,
            /* 'img'=> $file ? $file->store('public/images') : 'public/images/default.png' */
        ]);
        
        if ($file){
            Storage::delete($data->img);
            $data->img = $file->store('public/images');
            $data->save();
        }

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $data)
    {
        $data->delete();
        Storage::delete($data->img);
        return redirect()->route('comics.index');
    }
}
