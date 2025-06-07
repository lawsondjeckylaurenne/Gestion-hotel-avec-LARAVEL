<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;




class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function list()
     {
         $hotels = Client::all();
         return view("list")->with('hotels', $hotels);
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'raison' => 'required|string',
            'urbain' => 'required|string',
            'tel' => 'required|integer',
            'villes' => 'required|string',
            'stand' => 'required|string',
        ]);
    
        $hotel = Client::create($data);
    
        return redirect()->route('list')->with('success', 'Hotel enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hotel = Client::findOrFail($id);
        return view("edit")->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hotel=Client::findOrFail($id);
        $data = $request->validate([
            'raison' => 'required|string',
            'urbain' => 'required|string',
            'tel' => 'required|integer',
            'villes' => 'required|string',
            'stand' => 'required|string',
            // Ajoutez ici les autres champs que vous souhaitez mettre à jour
        ]);
    
        $hotel->update($data);
        
        return redirect()->route('list')->with('hotel', $hotel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $hotel = Client::findOrFail($id);
        $hotel->delete();
        return redirect()->route('list')->with('hotel', $hotel);
    }
}
