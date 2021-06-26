<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','price','header','description','url','created_at','updated_at'
    ];
    public function details(){
        return $this->hasMany(Purchase_detail::class);
    }
}
