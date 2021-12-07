<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Hash;
use Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'nguyendat',
            'name' => 'Dat',
            'email' => 'tiendat13895@gmail.com',
            'password' => Hash::make('password'),
            'telephone' => '0778747478',
            'remember_token' => Str::random(10),
        ]);
    }
}
