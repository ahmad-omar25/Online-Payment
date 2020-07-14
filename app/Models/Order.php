<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'order_no',
        'total_amount',
        'user_id',
        'offer_id',
        'bank_transaction_id'
    ];

    // Owner --> Order Be longs To One User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
