<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;

    static $rules = [
		'team_local_id' => 'required',
		'team_visitor_id' => 'required',
        'date_match'  => 'required'
    ];
        
    protected $fillable = [
        'points_local', 'points_visitor'
    ];

    public function getLocalTeamName(){
        $localTeam = Team::where('id', $this->team_local_id)->value('name');            // ->first();  devuelve todo el objeto

        return $localTeam;
    }

    public function getVisitorTeamName(){
        $visitorTeam = Team::where('id', $this->team_visitor_id)->value('name');

        return $visitorTeam;
    }

}
