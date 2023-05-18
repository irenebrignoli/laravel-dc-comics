<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:70',
            'description' => 'nullable|max:6000',
            'thumb' => 'nullable|url|max:300',
            'price' => 'required|numeric|between:0,99999',
            'series' => 'required|max:60',
            'sale_date' => 'required',
            'type' => 'required|max:60',
        ]);

        $form_data = $request->all();

        $newComic = new Comic();

        $newComic->fill($form_data);

        // $newComic->title = $form_data["title"];
        // $newComic->description = $form_data["description"];
        // $newComic->thumb = $form_data["thumb"];
        // $newComic->price = $form_data["price"];
        // $newComic->series = $form_data["series"];
        // $newComic->sale_date = $form_data["sale_date"];
        // $newComic->type = $form_data["type"];

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $request->validate([
            'title' => 'required|max:70',
            'description' => 'nullable|max:6000',
            'thumb' => 'nullable|url|max:300',
            'price' => 'required|numeric|between:0,99999',
            'series' => 'required|max:60',
            'sale_date' => 'required',
            'type' => 'required|max:60',
        ]);

        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * 
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
