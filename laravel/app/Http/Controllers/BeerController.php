<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mie_birre = Beer::all();
        $data=[
            'beers' => $mie_birre
        ];
        return view('beer.index', $data);
    }

    public function contatti()
    {
        $data=[
            'email' => 'info@birre.com'
        ];
        return view('contatti', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // VALIDAZIONI DEI CAMPI
        $request->validate([
            'name' => 'required|unique:beers|max:255',
            'type' => 'required|max:255',
            'color' => 'required|max:20',
            'volume' => 'required|max:5',
            'description' => 'required'
        ]);

        $beerNew = new Beer();
        // $beerNew->name = $data['name'];
        // $beerNew->type = $data['type'];
        // $beerNew->color = $data['color'];
        // $beerNew->volume = $data['volume'];
        // $beerNew->description = $data['description'];
        // CI RISPARMIAMO DI SCRIVERLI AVENDO INSERITO IL FILLABLE NEL MODEL, di seguito la lina di codice che sostituisce questo elenco
        $beerNew->fill($data);

        $beerNew->save();

        // POST/REDIRECT/GET
        // return redirect()->route('birre.index');
        return redirect()->route('birre.show',$beerNew->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $birra_cliccata = Beer::find($id);

        $data = [
            'birra' => $birra_cliccata
        ];
        return view('beer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
