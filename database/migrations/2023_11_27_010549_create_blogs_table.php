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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('secteur_activity');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->timestamps();


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->nullable();
                
            $table->unsignedBigInteger('ia_id');
            $table->foreign('ia_id')
                ->references('id')
                ->on('i_a_s')
                ->nullable();


                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};