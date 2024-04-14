<?php

namespace App\Http\Controllers;

use App\Models\Matche;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matches = Matche::latest()->paginate(10);  // no se pone new
        return view('matches.index', ['matches' => $matches]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('matches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
       
        $match = new Matche();

        $match->name = $request->name;
        $match->address = $request->address;
        $match->logo = $request->logo;

        // return $team;

        $match->save();

        return redirect()->route('matches.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)  //enviando el objeto (Team $team) se puede omitir find
    {
       $match = matche::find($id);
       
       return view('matches.show', ['match' => $match]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $match = matche::find($id);

        return view('matches.edit', ['match' => $match]);  //se puede usar compact cuando es el mismo nombre
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {        
        $match = matche::find($id);

        $match->name = $request->name;
        $match->address = $request->address;
        $match->logo = $request->logo;
        
        $match->save();

        return view('matches.show', ['match' => $match]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) 
    {
        $match = matche::find($id);

        $match->delete();

        return redirect()->route('matches.index');
    }
}
