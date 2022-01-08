<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
            'name' => 'Laboratory',
            'email' => 'laboratory@gmail.com',
            'role' => 'laboratory',
            'status' => '1',
            'password' => Hash::make('lab'),
            'remember_token' => Str::random(10),
        ]);
    }
}
