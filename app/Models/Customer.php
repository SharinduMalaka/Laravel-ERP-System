<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'customerID'; // Set customerID as the primary key
    public $incrementing = false; // Specify that it is not an auto-incrementing key
    protected $keyType = 'string'; // Specify the key type as string

    

    protected $fillable = [
        'customerID',
        'firstName',
        'lastName',
        'email',
        'password',
        'phone',
        'address',
    ];

    protected $hidden = [
        'password', // Hide password in queries
        'remember_token',
    ];
}
