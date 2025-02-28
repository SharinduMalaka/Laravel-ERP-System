<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts'; // Explicitly define the table name

    protected $primaryKey = 'cartID'; // Define the custom primary key

    public $incrementing = false; // Since 'cartID' is a string, disable auto-increment

    protected $keyType = 'string'; // Define primary key type as string

    protected $fillable = ['cartID', 'cartItemQuantity']; // Mass assignable attributes

    public $timestamps = true; // Enable timestamps
}
// Compare this snippet from app/Http/Controllers/CartController.php:
// <?php
//
// namespace App\Http\Controllers;
//
// use App\Models\Cart;
