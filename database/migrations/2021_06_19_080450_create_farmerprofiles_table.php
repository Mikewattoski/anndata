<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmerprofiles', function (Blueprint $table) {
            $table->id();
            $table->integer('farmer_id')->nullable()->unsigned();    
            $table->string('name');
            $table->bigInteger('Phone_no');
            $table->bigInteger('Aadhar_no');
            $table->text('image');
                
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
        Schema::dropIfExists('farmerprofiles');
    }
}
