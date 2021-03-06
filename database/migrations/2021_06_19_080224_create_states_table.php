<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('states');
    }
}

// INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
// (1, 'ANDAMAN AND NICOBAR ISLANDS','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (2, 'ANDHRA PRADESH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (3, 'ARUNACHAL PRADESH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (4, 'ASSAM','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (5, 'BIHAR','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (6, 'CHATTISGARH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (7, 'CHANDIGARH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (8, 'DAMAN AND DIU','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (9, 'DELHI','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (10, 'DADRA AND NAGAR HAVELI','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (11, 'GOA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (12, 'GUJARAT','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (13, 'HIMACHAL PRADESH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (14, 'HARYANA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (15, 'JAMMU AND KASHMIR','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (16, 'JHARKHAND','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (17, 'KERALA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (18, 'KARNATAKA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (19, 'LAKSHADWEEP','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (20, 'MEGHALAYA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (21, 'MAHARASHTRA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (22, 'MANIPUR','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (23, 'MADHYA PRADESH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (24, 'MIZORAM','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (25, 'NAGALAND','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (26, 'ORISSA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (27, 'PUNJAB','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (28, 'PONDICHERRY','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (29, 'RAJASTHAN','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (30, 'SIKKIM','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (31, 'TAMIL NADU','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (32, 'TRIPURA','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (33, 'UTTARAKHAND','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (34, 'UTTAR PRADESH','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (35, 'WEST BENGAL','2021-06-25 17:46:10', '2020-12-15 16:27:34'),
// (36, 'TELANGANA','2021-06-25 17:46:10', '2020-12-15 16:27:34');
