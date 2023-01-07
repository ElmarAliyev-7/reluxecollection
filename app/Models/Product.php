<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'hit', 'price', 'purchase_price', 'discount_possible', 'user_id', 'brand_id', 'category_id',
        'color_id', 'condition_id', 'status',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }

    public function sizes()
    {
        return $this->belongsTo(Size::class, ProductSize::class);
    }
}
