<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    /** @use HasFactory<\Database\Factories\BidFactory> */
    use HasFactory;
    protected $fillable = [
        'amount',
        'post_id',
        'user_id',
    ];
    public function users() {
        return $this->belongsTo(User::class);
    }
    public function posts() {
        return $this->belongsTo(Post::class);
    }
}
