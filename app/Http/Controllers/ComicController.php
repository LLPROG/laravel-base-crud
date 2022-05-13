<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    protected $validationRules = [
        'title'         => 'required|min:3|max:250',
        'description'   => 'min:3|max:250',
        'thumb'         => 'url|min:13|max:250',
        'price'         => 'numeric',
        'series'        => 'max:250',
        'sale_date'     => 'date',
        'type'          => 'max:250'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comics = Comic::paginate(15);
        $comics = Comic::paginate(8);

        // dd($comics);
        // $data = [
        //     'comics' => $comics,
        // ];

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
    public function store(Request $request)
    {
        $comicData = $request->all();
        //validazione
        $request->validate($this->validationRules);

        $comicTable = new Comic();
        $comicTable->fill($comicData);
        $result = $comicTable->save();

        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics.show', [
            'comic' => $comic,
            'pageTitle' => $comic->title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
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
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //validazione
        $request->validate($this->validationRules);
        // prendiamo i nuovi valori
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
