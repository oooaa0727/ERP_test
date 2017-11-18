<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('C_id');
            $table->string('C_name');
            $table->string('C_postal');
            $table->string('C_address');
            $table->string('C_phone')->nullable();
            $table->string('C_cellphone');
            $table->string('C_fax')->nullable();
            $table->string('C_email')->nullable();
            $table->string('C_TaxID')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
