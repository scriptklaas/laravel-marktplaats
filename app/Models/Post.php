<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id',
        
    ];
    public function users() {
        return $this->belongsTo(User::class);
    }
    public function bids() {
        return $this->hasMany(Bid::class);
    }
    public function categories() {
        return $this->hasOne(Category::class);
    }
    public function messages() {
        return $this->hasMany(Message::class);
    }
}
