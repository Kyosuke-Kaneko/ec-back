<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseHistory;

class PurchaseDetail extends Model
{
    protected $fillable = [
        'purchase_history_uuid', 'product_id','amount','created_at','updated_at'
    ];
    protected $hidden = [
        'id'
    ];
    protected $guarded = [
        'id'
    ];
    use HasFactory;
    public function history() {
        return $this->belongsTo(PurchaseHistory::class,'uuid','purchase_history_uuid');
    }
    public function products() {
        return $this->hasMany(Product::class,'id','product_id');
    }
}
