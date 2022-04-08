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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('manufacturers_id')->unsigned()->nullable(); // bigint 10 - unsigned
            $table ->foreign('manufacturers_id')->refernces('id')->on('manufacturer'); //foreign key

            $table->bigInteger('product_id')->unsigned()->nullable(); // bigint 10 - unsigned
            $table ->foreign('product_id')->refernces('id')->on('product'); //foreign key

            $table->bigInteger('vehicle_models_id')->unsigned()->nullable(); // bigint 10 - unsigned
            $table ->foreign('vehicle_models_id')->refernces('id')->on('vehicle_models'); //foreign key

            $table->bigInteger('delivary_method_id')->unsigned()->nullable(); // bigint 10 - unsigned
            $table ->foreign('delivary_method_id')->refernces('id')->on('delivary_method'); //foreign key


            $table ->string('name');// varcahr 255
            
            $table->longText('decription')->nullable();// text

            $table->string('image')->nullable();


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
        Schema::dropIfExists('promotions');
    }
};
