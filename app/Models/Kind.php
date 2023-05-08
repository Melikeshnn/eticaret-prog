<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Kind
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Kind newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kind newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kind query()
 * @mixin \Eloquent
 */
class Kind extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'isDeleted'
    ];
}
