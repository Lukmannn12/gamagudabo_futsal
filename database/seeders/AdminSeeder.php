<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'user234',
                'email'=>'user234@gmail.com',
                'role'=>'user',
                'password'=> bcrypt('user234')
            ],
            [
                'name'=>'admin123',
                'email'=>'admin123@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('admin123')
            ],
            ];
    
            foreach($userData as $key => $val){
                User::create($val);
            }
    }
}
