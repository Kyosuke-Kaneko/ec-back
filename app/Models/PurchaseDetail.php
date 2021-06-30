<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_history_uuid', 'product_id','amount','created_at','updated_at'
    ];
    protected $hidden = [
        'id'
    ];
    protected $guarded = [
        'id'
    ];
}
