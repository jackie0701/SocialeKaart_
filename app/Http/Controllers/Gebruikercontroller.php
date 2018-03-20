<?php

namespace SocialeKaart\Http\Controllers;

use SocialeKaart\Gebruiker;
use Illuminate\Http\Request;
use SocialeKaart\User;

class Gebruikercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gebruiker = User::all();

        return view('gebruiker',compact('gebruiker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \SocialeKaart\Gebruiker  $gebruiker
     *  @return \Illuminate\Http\Response
     */
    public function show(Gebruiker $gebruiker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SocialeKaart\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function edit(User $gebruiker)
    {
        return view('edit',compact('gebruiker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SocialeKaart\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gebruiker $gebruiker)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);


        $gebruiker->update($request->all());


        return redirect('gebruiker')
            ->with('success','Gebruiker updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SocialeKaart\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gebruiker $gebruiker)
    {
        $gebruiker->delete();
    }
}
