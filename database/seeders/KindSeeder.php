<?php

namespace Database\Seeders;

use App\Models\Kind;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kind::create(['name' => 'Aksiyon', 'slug' => Str::slug('Aksiyon')]);
        Kind::create(['name' => 'Bulmaca', 'slug' => Str::slug('Bulmaca')]);
        Kind::create(['name' => 'Dövüş', 'slug' => Str::slug('Dövüş')]);
        Kind::create(['name' => 'Nişancı', 'slug' => Str::slug('Nişancı')]);
        Kind::create(['name' => 'Rol Yapma', 'slug' => Str::slug('Rol Yapma')]);
        Kind::create(['name' => 'Simülasyon', 'slug' => Str::slug('Simülasyon')]);
        Kind::create(['name' => 'Spor', 'slug' => Str::slug('Spor')]);
        Kind::create(['name' => 'Strateji', 'slug' => Str::slug('Strateji')]);
        Kind::create(['name' => 'Yarış', 'slug' => Str::slug('Yarış')]);
    }
}
