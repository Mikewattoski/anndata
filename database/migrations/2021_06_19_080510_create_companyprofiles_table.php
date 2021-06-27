<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyprofiles', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->nullable()->unsigned();  
            $table->string('name');
            $table->bigInteger('Phone_no');
            $table->bigInteger('Company_no');
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
        Schema::dropIfExists('companyprofiles');
    }
}
