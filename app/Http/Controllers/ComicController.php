<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*    dd(Comic::all()); */

        return view('admin.comics.index', ['comics' => Comic::orderByDesc('id')->paginate(8)]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*  dd($request); */
        $data = $request->all();
        //*sto creando in modo automatico una nuova istanza di oggetti
        Comic::create($data);

        /* posso indirizzare alla index */
        /* return to_route('comics.index'); */
        /* oppure: */

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        /*     dd($comic); */
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comic->update($request->all());
        return to_route('comics.index', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index', $comic);
    }
}
