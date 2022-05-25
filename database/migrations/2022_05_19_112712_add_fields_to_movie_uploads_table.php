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
            $table->string('state')->after('movie_catr')->nullable();
            $table->string('loc')->after('movie_catr')->nullable();
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
            $table->dropColumn('state');
            $table->dropColumn('loc');
        });
    }
};
