<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Slider
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @mixin \Eloquent
 */
class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'sliderMainText',
        'sliderSubText',
        'sliderButtonLink',
        'sliderButtonText',
        'isDeleted'
    ];
}
