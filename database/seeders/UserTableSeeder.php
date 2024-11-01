<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::create([
            'name' => 'Md.Meherul Islam', 
            'email' => 'meherul@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
