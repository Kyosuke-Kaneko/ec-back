<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_history extends Model
{
    protected $fillable = [
        'history_id', 'user_id', 'total_price','created_at','updated_at'
    ];
 
    protected $hidden = [
        'id'
    ];
    protected $guarded = [
        'id'
    ];
    use HasFactory;
}
