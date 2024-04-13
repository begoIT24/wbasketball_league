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
        $teams = Team::orderBy('ranking', 'asc')->paginate();  // no se pone new
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
    public function show($id)
    {
       $team = team::find($id);
       
       return view('teams.show', ['team' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
