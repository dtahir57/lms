<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Course extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_enroll_in_courses')
                                    ->using(UserEnrollInCourse::class)
                                    ->withPivot([
                                        'created_at',
                                        'updated_at'
                                    ]);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
