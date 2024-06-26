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
            'ranking' => '1'
        ]);

        Team::create([
            'name' => 'Casademont Zaragoza',
            'address' => 'Zaragoza',
            'logo' => '/images/3zaragoza.jpg',
            'ranking' => '4'
        ]);

        Team::create([
            'name' => 'Spar Girona',
            'address' => 'Girona',
            'logo' => '/images/4girona.jpg',
            'ranking' => '2'
        ]);

        Team::create([
            'name' => 'Barça CBS',
            'address' => 'Barcelona',
            'logo' => '/images/5barsa.jpg',
            'ranking' => '3'
        ]);

        Team::create([
            'name' => 'Movistar Estudiantes',
            'address' => 'Madrid',
            'logo' => '/images/6estudiantes.jpg'
        ]);


    }
}
