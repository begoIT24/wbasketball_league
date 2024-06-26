<?php

namespace App\Http\Controllers;

use App\Models\Matche;
use App\Models\Team;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matches = Matche::orderBy('id', 'asc')->paginate(10);  // no se pone new
       
        return view('matches.index', ['matches' => $matches]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();

        return view('matches.create', ['teams' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'local_team' => 'required',
            'visitor_team' => 'required',
            'date_match' => 'required|date'
          ]);  
       
        $match = new Matche();

        $match->team_local_id = $request->local_team;
        $match->team_visitor_id = $request->visitor_team;
        $match->date_match = $request->date_match;
        
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

        $teams = Team::all();

        return view('matches.edit', ['match' => $match], ['teams' => $teams]);  //se puede usar compact cuando es el mismo nombre
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {        
        $request->validate([
            'local_team' => 'required',
            'visitor_team' => 'required',
            'points_local' => 'nullable|numeric|min:0|max:200',
            'points_visitor' => 'nullable|numeric|min:0|max:200',
            'date_match' => 'required|date'
          ]);  
        
        
        $match = matche::find($id);     
       
        if (is_numeric($request->local_team)) {
                $match->team_local_id = $request->local_team;
            } else {
                $localTeam = Team::where('name', $request->local_team)->first();
                $match->team_local_id = $localTeam->id;
            }      
       
        if (is_numeric($request->visitor_team)) {
                $match->team_visitor_id = $request->visitor_team;
            } else {
                $visitorTeam = Team::where('name', $request->visitor_team)->first();
                $match->team_visitor_id = $visitorTeam->id;
            }
     
        $match->points_local = $request->points_local;
        $match->points_visitor = $request->points_visitor;
        $match->date_match = $request->date_match;
        
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
