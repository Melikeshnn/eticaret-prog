<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = "orders";
    
    protected $fillable = [
        'user_id',
        'product_id',
        'cardName',
        'cardNumber',
        'cardDate',
        'cardCvv',
        'total',
        'isDeleted',
    ];

    public function userDetail()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function productDetail()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
}
