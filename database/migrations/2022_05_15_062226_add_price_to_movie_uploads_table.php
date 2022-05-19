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
        Schema::table('movie_uploads', function (Blueprint $table) {
            $table->string('movie_price')->after('movie_link');
            $table->timestamp('movie_date')->after('movie_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_uploads', function (Blueprint $table) {
            $table->dropColumn('movie_price');
            $table->dropColumn('movie_date');
        });
    }
};
