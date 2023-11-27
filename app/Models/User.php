<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relationships
    public function receipts()
    {
        return $this->hasMany(Receipt::class, 'user_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }
}
