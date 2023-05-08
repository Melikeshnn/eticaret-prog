<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Error
 *
 * @property int $id
 * @property string $errorMessage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Error newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Error newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Error query()
 * @method static \Illuminate\Database\Eloquent\Builder|Error whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Error whereErrorMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Error whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Error whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Error extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];
}
