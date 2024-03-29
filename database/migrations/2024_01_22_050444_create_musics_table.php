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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('Year');
            $table->string('Genre');
            $table->string('album');
            $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->string('description', 900);
            $table->string('musicFile', 900);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musics');
    }
};
