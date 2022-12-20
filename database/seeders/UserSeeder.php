<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      
        User::create([
            'name' => 'asti',
            'username' => 'asti',
            'password' => Hash::make('asti'),
            'email' => 'asti@gmail.com'
        ]);

        
        User::create([
            'name' => 'bambang',
            'username' => 'bambang',
            'password' => Hash::make('bambang'),
            'email' => 'bambang@gmail.com'
        ]);
    }
}
