<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'categoryID';
    public $incrementing = false;

    protected $fillable = [
        'categoryID',
        'categoryName',
        'categoryDescription',
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'categoryID', 'categoryID');
    }
}
