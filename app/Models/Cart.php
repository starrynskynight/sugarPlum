<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['product_id', 'quantity', 'session_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
