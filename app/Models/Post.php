<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'Posts';
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];
    // Owner --> Order Be longs To One User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
