<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('rating', 3, 1);
            $table->integer('length_in_minutes');
            $table->date('released_at');
            $table->string('country_of_origin');
            $table->string('youtube_trailer_id')->nullable();
            $table->text('summary')->nullable();
            $table->string('spoken_in_language');
            $table->enum('type', ['movie', 'series']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
