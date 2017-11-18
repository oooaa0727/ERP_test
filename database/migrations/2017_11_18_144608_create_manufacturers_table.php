<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('M_id');
            $table->string('M_name');
            $table->string('M_POC');
            $table->string('M_contact');
            $table->string('M_postal');
            $table->string('M_address');
            $table->string('M_phone')->nullable();
            $table->string('M_cellphone');
            $table->string('M_fax')->nullable();
            $table->string('M_email')->nullable();
            $table->string('M_TaxID')->nullable();
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
        Schema::dropIfExists('manufacturers');
    }
}
