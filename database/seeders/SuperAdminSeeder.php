<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(        [
                'name' => 'Hakan',
                'surname' => 'DİNÇTÜRK',
                'type' => 'superadmin',
                'email' => 'hakan.dincturkk@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make(123456), // password
                'remember_token' => Str::random(10)
            ]
        );

        User::insert([
            'name' => 'Cengizhan',
            'surname' => 'DURMUŞ',
            'type' => 'superadmin',
            'email' => 'cengiz@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456), // password
            'remember_token' => Str::random(10)
        ]);
    }
}
