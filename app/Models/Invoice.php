<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'invoice_id',
        'token_id',
        'order_id',
        'price_amount',
        'price_currency',
        'status',
        'auth_token',
        'invoice_url',
        'rate',
        'charge',
        'user_id',
    ];
}
