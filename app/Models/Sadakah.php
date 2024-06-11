<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sadakah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'number',
        'amount',        
        'payment_method',
        'TrxId',
    ];
}
