<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_role')->default('user');
            $table->string('full_name');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->bigInteger('total_login')->default(0);
            $table->bigInteger('total_vote')->default(0);
            $table->bigInteger('favourites')->default(0);
            $table->bigInteger('token_uploads')->default(0);
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
