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
        
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->string('title', 25);
            $table->binary('cover');
            $table->string('content', 400);
            $table->foreignId('author')->constrained('users', 'id');
            $table->date('publishDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
