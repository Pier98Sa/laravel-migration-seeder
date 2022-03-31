<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('numero_offerta')->unique();
            $table->string('destination',30);
            $table->string('hotel',50);
            $table->unsignedTinyInteger('travellers');
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('transport',20);
            $table->string('place_of_departure',35);
            $table->string('place_of_arrival',35);
            $table->text('activities_included')->nullable();
            $table->decimal('amount', 8, 2);
            $table->unsignedTinyInteger('discount')->nullable();
            $table->unsignedInteger('travel_time');
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
        Schema::dropIfExists('trips');
    }
}
