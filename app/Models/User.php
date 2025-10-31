<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
    	'img',  
    	'username',
    	'email',
    	'password',
    	'token',
    	'role_id',     
    	'statu_id',
    	'is_buyer',      
    	'terms',
    	'is_verified',     
    	'is_banned',
    	'reason_id',
    	'url_website'        
    ];

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


 //    public function userscourses(){

 //    	 return $this->belongsToMany(UserCourse::class);

	// 	// return $this->hasMany(UserCourse::class);

	// 	// return $this->belongsToMany(UserCourse::class);

	// 	// return $this->hasManyThrough(UserCourse::class, Course::class);

	// 	 // return $this->hasManyThrough(
 //   //          UserCourse::class,
 //   //          Course::class,
 //   //          'user_id', // Foreign key on the environments table...
 //   //          'course_id', // Foreign key on the deployments table...
 //   //          'id', // Local key on the applications table...
 //   //          'id' // Local key on the environments table...
 //   //      );


 //        // return $this->belongsToMany(UserCourse::class);
	// }

    public function courses(){

    	return $this->belongsToMany(Course::class, 'users_courses', 'user_id', 'course_id');

    	// return $this->belongsToMany(Course::class);

    	// return $this->belongsToMany(Role::class, 'role_user');

    	// return $this->belongsToMany(Course::class, 'course_user');



	 	// return $this->belongsToMany(Course::class)->using(UserCourse::class);

		// return $this->hasMany(Course::class);


        // return $this->belongsToMany(UserCourse::class);
    }
}
