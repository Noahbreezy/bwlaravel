<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {

        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username', 15);
            $table->string('email', 50);
            $table->date('birthday')->nullable();
            $table->binary('avatar')->nullable();
            $table->string('aboutMe', 100)->default('');
            $table->string('role')->default('user');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
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
