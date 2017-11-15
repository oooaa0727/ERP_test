<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('S_name');
            $table->string('S_TaxID');
            $table->string('S_POC');
            $table->string('S_contact');
            $table->string('S_postal');
            $table->string('S_address');
            $table->string('S_phone');
            $table->string('S_cellphone');
            $table->string('S_fax');
            $table->string('S_email');
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
        Schema::dropIfExists('suppliers');
    }
}
