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
        Schema::create('matches', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->unsignedBigInteger('team_local_id');
            $table->unsignedBigInteger('team_visitor_id');
            $table->integer('points_local')->nullable();
            $table->integer('points_visitor')->nullable();
            $table->dateTime('date_match')->nullable();
            $table->timestamps(); //created_at / updated_at
            //constraint - foreign keys
            $table->foreign('team_local_id')->references('id')->on('teams');
            $table->foreign('team_visitor_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
