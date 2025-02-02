<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'book'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function book(){
        return $this->HasMany(Book::class);
    }
}
