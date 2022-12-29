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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("memberFullName");
            $table->string("memberEmail");
            $table->string("memberWA");
            $table->string("memberLine");
            $table->string("memberGithub");
            $table->string("birthPlace");
            $table->date("birthDate");
            $table->string("memberCV");
            $table->string("memberFlazz");
            $table->unsignedBigInteger('groupID');
            $table->foreign('groupID')->references('id')->on('groups');
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
        Schema::dropIfExists('members');
    }
};
