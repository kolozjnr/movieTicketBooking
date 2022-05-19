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
        Schema::create('user_booking_records', function (Blueprint $table) {
            $table->id();
            $table->string('movie_title')->nullable();
            $table->string('user_email')->unique()->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_tel')->nullable();
            $table->string('movie_date')->nullable();
            $table->bigInteger('movie_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->string('R1')->nullable();
            $table->string('R2')->nullable();
            $table->string('R3')->nullable();
            $table->string('R4')->nullable();
            $table->string('R5')->nullable();
            $table->string('R6')->nullable();
            $table->string('R7')->nullable();
            $table->string('R8')->nullable();
            $table->string('R9')->nullable();
            $table->string('R10')->nullable();
            $table->string('R11')->nullable();
            $table->string('R12')->nullable();
            $table->string('R13')->nullable();
            $table->string('R14')->nullable();
            $table->string('R15')->nullable();
            $table->string('R16')->nullable();
            $table->string('R17')->nullable();
            $table->string('R18')->nullable();
            $table->string('R19')->nullable();
            $table->string('R20')->nullable();
            $table->string('R21')->nullable();
            $table->string('R22')->nullable();
            $table->string('R23')->nullable();
            $table->string('R24')->nullable();
            $table->string('R25')->nullable();
            $table->string('R26')->nullable();
            $table->string('R27')->nullable();
            $table->string('R28')->nullable();
            $table->string('R29')->nullable();
            $table->string('R30')->nullable();
            $table->string('R31')->nullable();
            $table->string('R32')->nullable();
            $table->string('R33')->nullable();
            $table->string('R34')->nullable();
            $table->string('35')->nullable();
            $table->string('R36')->nullable();
            $table->string('R37')->nullable();
            $table->string('R38')->nullable();
            $table->string('R39')->nullable();
            $table->string('R40')->nullable();
            $table->string('R41')->nullable();
            $table->string('R42')->nullable();
            $table->string('43')->nullable();
            $table->string('R44')->nullable();
            $table->string('R45')->nullable();
            $table->string('46')->nullable();
            $table->string('R47')->nullable();
            $table->string('R48')->nullable();
            $table->string('R49')->nullable();
            $table->string('R50')->nullable();
            $table->foreign('movie_id')
            ->references('id')
            ->on('movie_uploads')
            ->onDelete('cascade');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
        Schema::dropIfExists('user_booking_records');
    }
};
