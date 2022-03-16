<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Weather extends Migration
{
    protected $connection = 'pgsql';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->string('city_id');
            $table->json('coordinates');
            $table->json('weather');
            $table->float('temperature', 5, 2);
            $table->float('feel', 5, 2);
            $table->integer('humidity');
            $table->float('wind', 5, 2);
            $table->timestamps();

            $table->index(['city_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('weather');
    }
}
