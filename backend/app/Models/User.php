<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    /**
     * Explicitly indicate which columns in the table cannot be changed.
     */
    protected $guarded = [];

    /**
     * Transform constants to strings
     */
    public function getGenders()
    {
        return [
            self::GENDER_MALE => 'Мужской',
            self::GENDER_FEMALE => 'Женский',
        ];
    }

    /**
     * To call from view like: $user->genderTitle
     */
    public function getGenderTitleAttribute()
    {
        return self::getGenders()[$this->gender];
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
