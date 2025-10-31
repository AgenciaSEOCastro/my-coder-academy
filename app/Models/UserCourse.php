<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{


	protected $table = 'users_courses';
	

	protected $fillable = [	
		'user_id',
		'course_id'		
	];

	 public function users()
    {
        return $this->belongsToMany(User::class);

         // return $this->belongsToMany(User::class, Course::class);

        // return $this->hasOneThrough(User::class, Course::class);

        // return $this->hasManyThrough(User::class, Course::class);
    }

     public function courses()
    {
        return $this->belongsToMany(Course::class);

        // return $this->hasOneThrough(User::class, Course::class);

        // return $this->hasManyThrough(User::class, Course::class);
    }

	
}
