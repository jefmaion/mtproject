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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->string('name', 500);
            $table->string('artist', 500)->nullable();
            $table->string('album', 500)->nullable();
            $table->string('gender', 500)->nullable();
            $table->string('key')->nullable();
            $table->double('bpm', 500)->nullable();
            $table->string('compass', 500)->nullable();

            $table->text('chords')->nullable();
            $table->text('lyrics')->nullable();
            $table->string('youtube', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
