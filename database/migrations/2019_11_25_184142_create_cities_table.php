<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');

            //oneToMany
            $table->integer('state_id')->unsigned()->default(1);
            $table->foreign('state_id')->references('id')
                  ->on('states'); // categoria da vaga

            $table->string('title');
            $table->string('zip_code');
            $table->string('lat', 15, 8);
            $table->string('long', 15, 8);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
