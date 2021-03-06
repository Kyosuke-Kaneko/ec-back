<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = [
        'uuid', 'user_id', 'total_price','created_at','updated_at'
    ];
    protected $hidden = [
        'id'
    ];
    protected $guarded = [
        'id'
    ];
    public function products(){
        return $this->belongsToMany(Product::class,'purchase_details','purchase_history_uuid','product_id')->withPivot('amount');
    }
}
