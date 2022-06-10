<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('phone_number')->unique();
            $table->string('email')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->boolean('gender')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('nick_name')->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->nullable();
            $table->timestamps();

            $table->index(['id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('users');
    }
};
