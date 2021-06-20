<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_detail extends Model
{
    protected $fillable = [
        'history_id', 'product_id','amount','created_at','updated_at'
    ];
 
    protected $hidden = [
        'id'
    ];
    protected $guarded = [
        'id'
    ];
    use HasFactory;
}
