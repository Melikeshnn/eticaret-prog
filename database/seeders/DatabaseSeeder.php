<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SuperAdminSeeder::class,
            UserSeeder::class,
            SliderSeeder::class,
            KindSeeder::class,
            PublisherSeeder::class,
        ]);
    }
}
