<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{	

	protected $table = 'courses';

	protected $fillable = [		
		'course_name',
		'course_url',
		'price_id'			
	];


	// public function userscourses(){
		
	// 	// return $this->hasMany(UserCourse::class);

	// 	return $this->belongsToMany(UserCoursse::class);
	// }

	public function users()
	{
		return $this->belongsToMany(User::class);

		// return $this->belongsToMany(User::class)->using(UserCourse::class);
	}
}
