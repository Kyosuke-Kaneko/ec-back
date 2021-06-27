<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseDetail;
use App\Models\User;
use App\Models\Product;

class PurchaseHistory extends Model
{
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
    public function details(){
        return $this->hasMany(PurchaseDetail::class,'purchase_history_uuid','uuid');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function products(){
        return $this->belongsToMany(Product::class,'purchase_details','purchase_history_uuid','product_id')->withPivot('amount');
    }
    use HasFactory;
}
