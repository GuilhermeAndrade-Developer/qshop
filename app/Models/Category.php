<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @var mixed
     */
    private $products;
    /**
     * @var mixed
     */
    private $children;

    const DEFAULT_IMG_CATEGORY_DIR = 'category/images/';

    protected $fillable = [
        'order',
        'name',
        'order',
        'file',
        'status',
    ];

    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class,'product_categories');
    }

    public function totalChildren() {
        return $this->sum('parent_id');
    }
}
