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
        Schema::create('movie_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('movie_title')->nullable();
            $table->string('movie_descr')->nullable();
            $table->string('movie_type')->nullable();
            $table->string('movie_genre')->nullable();
            $table->string('movie_hr')->nullable();
            $table->string('movie_mins')->nullable();
            $table->string('movie_lang')->nullable();
            $table->string('movie_catr')->nullable();
            $table->string('movie_img')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('movie_uploads');
    }
};
