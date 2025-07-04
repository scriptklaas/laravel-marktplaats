<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'sender_id',
        'receiver_id',
        'post_id',
    ];
    public function users() {
        return $this->belongsTo(User::class);
    }
    public function posts() {
        return $this->belongsTo(Post::class);
    }
}
