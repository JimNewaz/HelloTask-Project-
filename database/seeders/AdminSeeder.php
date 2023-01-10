<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin using seeder        

        Admin::create([
            'name' => 'Sayed Newaz',
            'email' => 'ximnewaz@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
