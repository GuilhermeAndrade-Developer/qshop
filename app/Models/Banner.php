<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    const DEFAULT_IMG_BANNER_DIR = 'banner/images/';

    protected $fillable = [
        'title',
        'sub_title',
        'button',
        'button_link',
        'image',
        'model',
        'postiton',
        'description'
    ];
}
