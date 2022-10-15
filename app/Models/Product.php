<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'stock',
        'status',
    ];

    public function budget() {
        return $this->belongsToMany(Product::class, 'budgets_product', 'products_id', 'budgets_id');
    }
}
