<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Publisher
 *
 * @property int $id
 * @property string $name
 * @property int $pcProductCount
 * @property int $psProductCount
 * @property int $xboxProductCount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher wherePcProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher wherePsProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereXboxProductCount($value)
 * @mixin \Eloquent
 */
class Publisher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'pcProductCount',
        'psProductCount',
        'xboxProductCount',
        'isDeleted'
    ];
}
