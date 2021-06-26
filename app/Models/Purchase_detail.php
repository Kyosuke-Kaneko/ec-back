<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_detail extends Model
{
    // protected $primaryKey = 'purchase_history_uuid';
    // public $incrementing = false;
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
    public function histories() {
        return $this->belongsTo(Purchase_history::class);
    }
    // public function products() {
    //     return $this->belongsTo(Product::class);
    // }
}
