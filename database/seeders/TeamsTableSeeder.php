<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {                 
        Team::create([
            'name' => 'Perfumerias Avenida',
            'address' => 'Salamanca',
            'logo' => '/images/1perf_av.jpg',
        ]);

        Team::create([
            'name' => 'Valencia B.C.',
            'address' => 'Valencia',
            'logo' => '/images/2valencia.jpg',
        ]);

        Team::create([
            'name' => 'Casademont Zaragoza',
            'address' => 'Zaragoza',
            'logo' => '/images/3zaragoza.jpg',
        ]);

        Team::create([
            'name' => 'Spar Girona',
            'address' => 'Girona',
            'logo' => '/images/4girona.jpg',
        ]);

        Team::create([
            'name' => 'Barça CBS',
            'address' => 'Barcelona',
            'logo' => '/images/5barsa.jpg',
        ]);

        Team::create([
            'name' => 'Movistar Estudiantes',
            'address' => 'Madrid',
            'logo' => '/images/6estudiantes.jpg'
        ]);


    }
}
