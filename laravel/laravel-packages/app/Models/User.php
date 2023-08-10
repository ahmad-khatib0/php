<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use   LogsActivity,  HasApiTokens, HasFactory, Notifiable;

    protected static $ignoreChangedAttributes = ['password', 'updated_at']; //updated_at is required in 
    // this case if you want to not track the password manipulation or any column 
    protected static $logAttributes = ['name', 'email', 'password'];
    protected static $logFillable = true;
    protected static $logOnlyDirty = true;

    protected static $logName  = 'user';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "You have {$eventName} user";
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    public function scopeVerified($query)
    {
        return $query->whereNotNull('email_verified_at');
    }


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
