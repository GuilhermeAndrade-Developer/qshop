<?php

namespace App\Services;

use App\Models\Budget;
use App\Models\Product;

class BudgetService {
    public function create($data) {
        $budget = new Budget();
        $budget->name       = $data['name'];
        $budget->email      = $data['email'];
        $budget->phone      = $data['phone'];
        $budget->staus      = 1;
        $budget->cpf_cnpj   = $data['cpf_cnpj'];
        $budget->save();

        $product = Product::find($data['productId']);
        if($product) {
            $budget->products()->attach($product->id, ['total' => $data['total']]);
        }
    }
}