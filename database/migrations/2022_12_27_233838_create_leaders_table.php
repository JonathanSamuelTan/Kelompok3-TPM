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
        Schema::create('leaders', function (Blueprint $table) {
            $table->id();
            $table->string("leaderName");
            $table->string("leaderEmail");
            $table->string("leaderWA");
            $table->string("leaderLine");
            $table->string("leaderGithub");
            $table->string("birthPlace");
            $table->date("birthDate");
            $table->string("leaderCV");
            $table->string("leaderFlazz");
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
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
        Schema::dropIfExists('leaders');
    }
};
