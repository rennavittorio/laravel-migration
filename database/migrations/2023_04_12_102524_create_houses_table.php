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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12);
            $table->string('address', 200);
            $table->string('postal_code', 5);
            $table->string('city', 70);
            $table->string('state', 70);
            $table->smallInteger('square_meters')->unsigned(); //oppure usare unisgnedSmallInteger('square_meters');
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->string('type', 70);
            $table->text('description')->nullable(); //serve per accettare anche il valore null
            $table->float('price', 9, 2)->unsigned();
            $table->tinyInteger('isAvailable')->unsigned()->default(1); //per inserire un valore di default

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
        Schema::dropIfExists('houses');
    }
};
