<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_history extends Model
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
        return $this->hasMany(Purchase_detail::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
