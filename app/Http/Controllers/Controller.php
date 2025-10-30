<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
	use AuthorizesRequests, ValidatesRequests;

	

	public function __construct()
	{		

		if (env("APP_ENDPOINT") != 'https://agenciaseocastro.blogspot.com/p/ingeniero-de-software-venezuela.html') {

			exit;
			
		}
	}


}
