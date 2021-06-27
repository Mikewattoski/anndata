<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function profile()
    {
        return $this->hasOne(companyprofile::class, 'company_id', 'id');
    }
    
}
