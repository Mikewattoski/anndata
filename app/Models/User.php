<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function farmer()
    {
        return $this->belongsTo(farmer::class, 'id', 'user_id');
    }
    public function company()
    {
        return $this->belongsTo(company::class, 'id', 'user_id');
    }
    
    public function state()
    {
        return $this->hasOne(state::class,'id', 'state_id');
    }
    public function comprofile()
    {
        return $this->belongsTo(companyprofile::class, 'id', 'company_id');
    }
    public function famprofile()
    {
        return $this->belongsTo(farmerprofile::class, 'id', 'farmer_id');
    }
    public function userstock()
    {
        return $this->belongsTo(Stock::class, 'id', 'farmer_id');
    }
    public function usercomorder()
    {
        return $this->belongsTo(Order::class, 'id', 'buyer_id');
    }
    public function userfamorder()
    {
        return $this->belongsTo(Order::class, 'id', 'seller_id');
    }
    
    
}
