<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function item()
    {
        return $this->hasOne(item::class, 'id', 'item_id');
    }
    public function farmer()
    {
        return $this->hasOne(User::class, 'id', 'farmer_id');
    }
}
