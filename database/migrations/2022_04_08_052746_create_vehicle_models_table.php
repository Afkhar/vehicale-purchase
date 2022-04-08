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
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('manufacturers_id')->unsigned(); // bigint 10 - unsigned
            $table ->foreign('manufacturers_id')->refernces('id')->on('manufacturer'); //foreign key

            $table ->string('name');// varcahr 255
            
            $table->longText('decription')->nullable();// text

            $table->string('image')->nullable();

            $table -> boolen('is_active')->default(true);

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
        Schema::dropIfExists('vehicle_models');
    }
};
