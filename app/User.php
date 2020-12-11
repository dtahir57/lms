<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\UserProfile;
use App\Models\Course;
use App\Models\UserEnrollInCourse;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_enroll_in_courses')
                                    ->using(UserEnrollInCourse::class)
                                    ->withPivot([
                                        'created_at',
                                        'updated_at'
                                    ]);
    }
}
