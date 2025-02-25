<?php

namespace Database\Seeders;

use App\Models\admin\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::Create([
            'path' => 'uploads/teams/gambar-1.png',
            'name' => 'nama',
            'position' => 'Wakil',
            'description' => 'deskripsi',
        ]);

        Team::Create([
            'path' => 'uploads/teams/gambar-2.png',
            'name' => 'nama 2',
            'position' => 'Wakil 2',
            'description' => 'deskripsi 2',
        ]);

        Team::Create([
            'path' => 'uploads/teams/gambar-3.png',
            'name' => 'nama 3',
            'position' => 'Wakil 3',
            'description' => 'deskripsi 3',
        ]);
    }
}
