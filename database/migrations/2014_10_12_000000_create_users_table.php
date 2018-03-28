<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('password');
            
            $table->string('profile_picture')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('first_name')->nullable();
            $table->string('family_name')->nullable();

            $table->string('avatar')->nullable();
            $table->string('cover_image')->nullable();
            $table->integer('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('bio')->nullable();

            $table->integer('country_id')->unsigned();
            $table->string('phone', 25);
            $table->boolean('email_verified')->default(0);
            $table->string('email_verify_code')->nullable();
            $table->string('email')->unique();

            $table->string('google_id')->unique()->nullable();
            $table->string('facebook_id')->unique()->nullable();
            $table->timestamp('last_active_at')->default(\Carbon\Carbon::now());


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
