<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;


    protected $fillable = [
        'realtor_id',
        'title',
        'address',
        'city',
        'state',
        'zipcode',
        'description',
        'price',
        'bedrooms',
        'garage',
        'sqft',
        'bathrooms',
        'lot_size',
        'is_published',
        'photo_main',
        'photo_1',
        'photo_2',
        'photo_3',
        'photo_4',
        'photo_5',
        'photo_6',
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['state'] ?? false) {
            $query->where('state', 'like', '%' . request('state') . '%');
        }
        if($filters['city'] ?? false) {
            $query->where('city', 'like', '%' . request('city') . '%');
        }
        if($filters['bedrooms'] ?? false) {
            $query->where('bedrooms', '>=', request('bedrooms'));
        }
        if($filters['price'] ?? false) {
            $query->where('price', '<=', request('price'));
        }

        // if($filters['search'] ?? false) {
        //     $query->where('title', 'like', '%' . request('search') . '%')
        //     ->orWhere('description', 'like', '%' . request('search') . '%')
        //     ->orWhere('tags', 'like', '%' . request('search') . '%');
        // }
    }

    public function Realtor() {
        return $this->belongsTo(Realtor::class, 'realtor_id');
    }
}
