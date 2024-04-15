<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderBy('ranking', 'asc')->paginate(10);  // no se pone new
        return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
       
        $team = new Team();

        $team->name = $request->name;
        $team->address = $request->address;
        $team->logo = $request->logo;

        // return $team;

        $team->save();

        return redirect()->route('teams.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)  //enviando el objeto (Team $team) se puede omitir find
    {
       $team = team::find($id);
       
       return view('teams.show', ['team' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = team::find($id);

        return view('teams.edit', ['team' => $team]);  //se puede usar compact cuando es el mismo nombre
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {        
        $team = team::find($id);

        $team->name = $request->name;
        $team->address = $request->address;
        $team->logo = $request->logo;
        
        $team->save();

        return view('teams.show', ['team' => $team]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) 
    {
        $team = team::find($id);

        $team->delete();

        return redirect()->route('teams.index');
    }
}
