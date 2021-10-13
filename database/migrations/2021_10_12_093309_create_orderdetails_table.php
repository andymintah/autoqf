<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->BigIncrements('id')->unsigned()->index();
            $table->string('orderdetailid');
            $table->string('userid');
            $table->string('username');

            $table->string('ordernumber');

            $table->string('productid');
            $table->string('productname');

            $table->float('amount', 15,2)->nullable;


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
