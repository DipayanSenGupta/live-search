<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code');
            $table->bigInteger('available_space');
            $table->string('solution_type');
            $table->string('facilities');
            $table->string('image');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('image_5');
            $table->mediumText('address');	
            $table->longText('description');
            $table->tinyInteger('approved');
            $table->mediumText('electric');	
            $table->mediumText('temperature');	
            $table->mediumText('security');	
            $table->string('opening_time');	
            $table->string('closing_time');	
            $table->tinyInteger('all_time');
            $table->tinyInteger('propertyOwner');	
	
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
        Schema::dropIfExists('warehouses');
    }
}
