<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function buyer()
    {
        return $this->hasOne(User::class, 'id', 'seller_id');
    } 
     public function item()
    {
        return $this->hasOne(item::class, 'id', 'item_id');
    }
  
}
