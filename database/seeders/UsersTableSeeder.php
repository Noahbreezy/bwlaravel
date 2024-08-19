<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'role' => 'admin',
            'birthday' => '1970-01-01',
            'avatar' => file_get_contents(public_path('../public/images/suit.jpg')),
            'aboutMe' => 'I am the admin of this site.',
            'remember_token' => null,
            'created_at' => '2021-01-01 00:00:00',

        ]);

        User::create([
            'username' => 'player1',
            'email' => 'player1@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'birthday' => '2001-12-27',
            'avatar' => file_get_contents(public_path('../public/images/suit.jpg')),
            'aboutMe' => 'I am a player of this site.',
            'remember_token' => null,
            'created_at' => '2021-01-01 00:00:00',
        ]);

        // Add more users as needed...
    }
}