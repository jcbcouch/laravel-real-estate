<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realtor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'description',
        'email',
        'phone',
        'is_mvp',
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['name'] ?? false) {
            $query->where('name', 'like', '%' . request('name') . '%');
        }
    }

    public function listings() {
        return $this->hasMany(Listing::class, 'realtor_id');
    }
}
