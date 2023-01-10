<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class FirstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //my user using seeder 

        User::create([
            'name' => 'FirstUser',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
