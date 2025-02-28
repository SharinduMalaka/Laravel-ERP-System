<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'productID';

    protected $fillable = [
        'productID',
        'productName',
        'price',
        'description',
        'categoryID',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID', 'categoryID');
    }
}
