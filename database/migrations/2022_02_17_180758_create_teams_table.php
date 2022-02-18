<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            
            $table->string('team_name');
            
            $table->year('start_championship_year')->nullable();
            $table->year('end_championship_year')->nullable();
            $table->date('production_date');

            $table->string('jersey')->nullable();
            $table->string('championship')->nullable();
            $table->string('competition')->nullable();

            $table->string('team_image')->nullable();
            $table->string('jersey_image')->nullable();

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
        Schema::dropIfExists('teams');
    }
}
