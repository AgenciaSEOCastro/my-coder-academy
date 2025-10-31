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

	// public function users()
	// {

	// 	// return $this->hasManyThrough(
	// 	// 	User::class,
	// 	// 	Course::class,
 //  //           'application_id', // Foreign key on the environments table...
 //  //           'environment_id', // Foreign key on the deployments table...
 //  //           'id', // Local key on the applications table...
 //  //           'id' // Local key on the environments table...
 //  //       );

	// 	// return $this->hasMany(User::class);

 //        return $this->belongsToMany(User::class);

 //         // return $this->belongsToMany(User::class, Course::class);

 //        // return $this->hasOneThrough(User::class, Course::class);

	// 	// return $this->hasManyThrough(User::class);

 //        // return $this->hasManyThrough(User::class, Course::class);
	// }

	// public function courses()
	// {
	// 	return $this->belongsToMany(Course::class);

 //        // return $this->hasOneThrough(User::class, Course::class);

 //        // return $this->hasManyThrough(User::class, Course::class);
	// }

	
}
