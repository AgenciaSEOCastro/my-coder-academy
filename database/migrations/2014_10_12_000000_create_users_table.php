<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();           
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('url_website')->nullable();           
            $table->unsignedInteger('role_id');          
            $table->unsignedInteger('statu_id');           
            $table->boolean('is_buyer');         
            $table->boolean('terms');
            $table->boolean('is_verified');          
            $table->boolean('is_banned');           
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
