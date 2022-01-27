<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Notifications\WEllcomUser;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



    protected $guarded = [];

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
    ];

    public function profile(){


        return $this->hasOne(Profile::class);
    }

    public static function booted(){

        static::created(function ($user){

            $profile = Profile::create(['user_id' => $user->id]);


            $user->notify(new WEllcomUser('user->id' => $user->id));
        });
    }

    public function docs(){


        return $this->hasMany(Doc::class);
    }
}
