<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matche;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matche::create([
            'team_local_id' => '1',
            'team_visitor_id' => '2',
            'points_local' => '68',
            'points_visitor' => '75',
            'date_match' => '2024-04-18 20:00:00'
        ]);

        Matche::create([
            'team_local_id' => '3',
            'team_visitor_id' => '4',
            'points_local' => '74',
            'points_visitor' => '76',
            'date_match' => '2024-04-19 20:00:00'
        ]);

        Matche::create([
            'team_local_id' => '5',
            'team_visitor_id' => '6',
            'points_local' => '61',
            'points_visitor' => '58',
            'date_match' => '2024-04-18 18:00:00'
        ]);
    }
}
