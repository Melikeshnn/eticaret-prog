<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create(['name' => 'Ubisoft', 'slug' => Str::slug('Ubisoft')]);
        Publisher::create(['name' => '2K Games', 'slug' => Str::slug('2K Games')]);
        Publisher::create(['name' => 'Sony Interactive Ent.', 'slug' => Str::slug('Sony Interactive Ent.')]);
        Publisher::create(['name' => 'Rockstar Games', 'slug' => Str::slug('Rockstar Games')]);
        Publisher::create(['name' => 'Electronic Arts', 'slug' => Str::slug('Electronic Arts')]);
        Publisher::create(['name' => 'WarnerBros Games', 'slug' => Str::slug('WarnerBros Games')]);
        Publisher::create(['name' => 'CD Projekt Red', 'slug' => Str::slug('CD Projekt Red')]);
    }
}
