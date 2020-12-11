<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserEnrollInCourse extends Pivot
{
    protected $table = 'user_enroll_in_courses';
}
