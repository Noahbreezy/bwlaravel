<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kill;
use App\Models\User;

class KillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first(); // get the first user

        Kill::create([
            'userID' => $user->id,
            'killCount' => 123456789,
            'timestamp' => now(),
        ]);

        // Add more kills as needed...
    }
}