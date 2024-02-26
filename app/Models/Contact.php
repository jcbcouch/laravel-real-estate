<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'listing',
        'listing_id',
        'name',
        'message',
        'email',
        'phone',
    ];


    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
