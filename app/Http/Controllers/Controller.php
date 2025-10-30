<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
	use AuthorizesRequests, ValidatesRequests;

	protected $author;
	protected $copyright;

	

	public function __construct()
	{	

		$this->author = 'jonathancastro';
		$this->copyright = 'agenciaseocastro.blogspot.com';

		if (env("APP_AUTHOR") !== $this->author)  {

			exit;
			
		}

		if (env("APP_ENDPOINT") != 'https://agenciaseocastro.blogspot.com/p/ingeniero-de-software-venezuela.html') {

			exit;
			
		}


	}


}
