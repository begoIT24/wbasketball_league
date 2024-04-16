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
        // orderbyRaw para poner condición en caso de ranking=0, ordenación al final
        $teams = Team::orderByRaw('CASE WHEN ranking = 0 THEN 1 ELSE 0 END, ranking ASC')->paginate(10);
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
        $request->validate([
          'name' => 'required|unique:teams|string|max:255',
          'address' => 'required|string|max:255',
          'logo'  => 'image|max:2048'   // 2MB
        ]);             
        
        $team = new Team();

        if ($request->hasFile('logo')) {     
            
            $image = $request->file('logo');
            $destinationPath = 'images/';
            $team->logo = '/' . $destinationPath . $image->getClientOriginalName();
            $image->move($destinationPath, $team->logo);

        }else{
            $team->logo = '/images/LFendesa2.jpg';
        }   

        $team->name = $request->name;
        $team->address = $request->address;

        $team->save();

        return redirect()->route('teams.index');

        // return $request->all();
        // return $team;
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
        $request->validate([
            'name' => 'unique:teams|string|max:255',
            'address' => 'string|max:255',
            'ranking' => 'numeric|min:0|max:20'
          ]); 
        
        $team = team::find($id);
        
        if($request->hasFile('logo')) {
            
            $image = $request->file('logo');
            $destinationPath = 'images/';
            $team->logo = '/' . $destinationPath . $image->getClientOriginalName();
            $image->move($destinationPath, $team->logo);
        }

        $team->name = $request->name;
        $team->address = $request->address;
        $team->ranking = $request->ranking;
       
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
