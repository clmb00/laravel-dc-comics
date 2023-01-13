<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(6);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Comic::create_slug($form_data['title']);

        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect(route('comics.show', $new_comic));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();

        if($form_data['title'] != $comic->title){
            $form_data['slug'] = Comic::create_slug($form_data['title']);
        } else {
            $form_data['slug'] = $comic->slug;
        }

        $comic->update($form_data);

        return redirect(route('comics.show', $comic));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect(route('comics.index'))->with('deleted', "The comic '$comic->title' has been successfully deleted!");
    }
}
