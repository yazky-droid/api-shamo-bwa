<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'transactions_id',
        'users_id',
        'quantity',
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
}
