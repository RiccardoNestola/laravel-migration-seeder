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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 200);
            $table->string('departure_station', 200);
            $table->string('arrival_station', 200);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 20);
            $table->tinyInteger('number_of_carriages');
            $table->boolean('in_time');
            $table->boolean('is_delete');
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
        Schema::dropIfExists('trains');
    }
};

