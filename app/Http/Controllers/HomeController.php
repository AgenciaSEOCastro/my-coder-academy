<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\UserCourse;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

    	$courses = User::with('userscourses')
    	// ->with('courses')
    	->get();

    	
    	// $courses = User::with('userscourses')
    	// ->with('courses')
    	// ->get();

    	// $courses = UserCourse::with('courses')
    	// // ->with('courses')
    	// ->get();

    	// $courses = User::find(1);

    	// $roles = User::find(1)->roles()->orderBy('name')->get();

    	return response()->json($courses);

    	foreach ($users->flatMap->podcasts as $podcast) {
    		echo $podcast->subscription->created_at;
    	}

    	exit;



    	// $courses = User::get();

    	// print_r($courses);

    	return response()->json($courses);

    	exit;

    	return view('home');
    }


}
