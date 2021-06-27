<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyprofile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function main()
    {
        return $this->belongsTo(company::class, 'company_id', 'id');
    }
}
