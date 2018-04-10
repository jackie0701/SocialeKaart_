<?php

namespace SocialeKaart\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use PhpParser\Node\Expr\Array_;
Use DB;
use SocialeKaart\User;
use Illuminate\Support\Facades\Hash;


class Gebruikercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gebruikers = DB::table('users')->paginate(6);

        return view('gebruiker',compact('gebruikers', $gebruikers));
    }


    public function store(array $gebruiker)
    {
        return User::make($gebruiker, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
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
     * @param  \SocialeKaart\User  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gebruiker)
    {
        $gebruiker = User::find($gebruiker);
        $gebruiker->name = $request->get('name');
        $gebruiker->email = $request->get('email');
        $gebruiker->update();
        if($gebruiker){
            return redirect('gebruiker')->with('status', 'Profile edited!');
        }
        else {
            return redirect('gebruiker')->with('status', 'Failed');
        }

    }/*
        $gebruiker = User::all();
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $gebruiker->update($request->all());
    */
    public function show(){

        return view('add', compact('gebruiker'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SocialeKaart\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function destroy($gebruiker)
    {
        $user = new User();
        $gebruiker = $user->find($gebruiker);
        $gebruiker->delete();

        // redirect
        return redirect('gebruiker')->with('status', 'Profile deleted!');
    }
    protected function validator(array $gebruiker)
    {
        return Validator::make($gebruiker, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    public function create(Request $request)
    {
        $gebruiker = new User();
        $gebruiker->name = $request->name;
        $gebruiker->email = $request->email;
        $gebruiker->password = Hash::make($request->email);
        $gebruiker->save();
        return redirect('gebruiker')->with('status', 'Profile created!');
    }
}
