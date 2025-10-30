<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Course;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    	Schema::create('courses', function (Blueprint $table) {
    		$table->id();
    		$table->string('course_name');
    		$table->string('course_img');
    		$table->string('course_icon');
    		$table->string('course_url');
    		$table->longText('course_content')->nullable();
    		$table->longText('course_body')->nullable();        
    		$table->unsignedInteger('price_id');
    		$table->string('promo_url')->nullable();    	             
    		$table->timestamps();
    	});

    	$reply = new Course;
    	$reply->course_name = 'Laravel';
    	$reply->course_img = 'aprende-laravel-desde-cero.png';
    	$reply->course_icon = 'fa-solid circle-play';    	
    	$reply->course_url = 'aprende-laravel-desde-cero';
    	$reply->course_content = '<p>Aprende Laravel 10 desde cero </p>';
    	$reply->course_body = '<ul>
    	<li>PHP estructurado y orientado a objetos desde 0 con PHP 8</li>      
    	</ul>';
    	$reply->price_id = 1;
    	$reply->promo_url = 'https://www.google.com/';    	        
    	$reply->save();

    	$reply = new Course;
    	$reply->course_name = 'Symfony';
    	$reply->course_img = 'aprende-symfony-desde-cero.png';
    	$reply->course_icon = 'fa-solid circle-play';   
    	$reply->course_url = 'aprende-symfony-desde-cero';
    	$reply->course_content = '<p>Aprende Symfony 7 desde cero</p>';
    	$reply->course_body = '<ul>      
    	<li>Query Builder y uso de joins</li>      
    	</ul>';
    	$reply->price_id = 1;             
    	$reply->save();     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    	Schema::dropIfExists('courses');
    }
};
