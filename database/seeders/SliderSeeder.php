<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'sliderMainText' => 'THE <i>BİGGEST </i><font color="#ff0000"><b>SALE</b></font>',
            'sliderSubText' => 'Special for today',
            'sliderButtonLink' => 'http://127.0.0.1:8000/',
            'sliderButtonText' => 'Alışverişe Başla!',
            'photoPath' => 'front/images/uploads/the-bbiggest-bsale_1646743228.png',
        ]);

        Slider::create([
            'sliderMainText' => 'THE <i>BİGGEST </i><b style=""><font color="#104a5a">SALE</font></b>',
            'sliderSubText' => 'Special for today',
            'sliderButtonLink' => 'http://127.0.0.1:8000/',
            'sliderButtonText' => 'Alışverişe Başla!',
            'photoPath' => 'front/images/uploads/the-bbiggest-bsale_1646743228.png',
        ]);

        Slider::create([
            'sliderMainText' => 'THE <i>BİGGEST </i><font color="green"><b>SALE</b></font>',
            'sliderSubText' => 'Special for today',
            'sliderButtonLink' => 'http://127.0.0.1:8000/',
            'sliderButtonText' => 'Alışverişe Başla!',
            'photoPath' => 'front/images/uploads/the-bbiggest-bsale_1646743228.png',
        ]);

        Slider::create([
            'sliderMainText' => 'THE <i>BİGGEST </i><font color="yellow"><b>SALE</b></font>',
            'sliderSubText' => 'Special for today',
            'sliderButtonLink' => 'http://127.0.0.1:8000/',
            'sliderButtonText' => 'Alışverişe Başla!',
            'photoPath' => 'front/images/uploads/the-bbiggest-bsale_1646743228.png',
        ]);

        Slider::create([
            'sliderMainText' => 'THE <u style="">BİGGEST </u><b style=""><font color="#b5a5d6">SALE</font></b>',
            'sliderSubText' => 'Special for today',
            'sliderButtonLink' => 'http://127.0.0.1:8000/',
            'sliderButtonText' => 'Alışverişe Başla!',
            'photoPath' => 'front/images/uploads/the-bbiggest-bsale_1646743228.png',
        ]);
    }
}
