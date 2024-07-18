<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Penjualan;
use App\Models\Peminjaman;
use App\Models\Cart;

class Book extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $with = ['review'];

    public function review(){
        return $this->hasMany(Review::class);
    }
    
    public function penjualan(){
        return $this->hasMany(Penjualan::class);
    }
    
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
    
    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
