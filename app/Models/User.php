<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_number',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
