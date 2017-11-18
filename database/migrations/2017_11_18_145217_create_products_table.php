<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('P_id');
            $table->string('P_name');
            $table->string('P_spec');
            $table->string('P_unit');
            $table->integer('P_purchasePR');
            $table->integer('P_salesPR');
            $table->string('S_id');
            $table->integer('P_inventory');
            $table->dateTime('P_safeStock')->nullable();
            $table->string('P_discontinued')->nullable();

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
        Schema::dropIfExists('products');
    }
}
