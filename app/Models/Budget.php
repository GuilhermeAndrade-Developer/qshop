<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'cpf_cnpj',
        'status',
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'budgets_product', 'budgets_id', 'products_id')->withPivot('total');
    }

    public function getCountBudgetItens() {
        return $this->products()->sum('total');
    }
}
