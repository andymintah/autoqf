<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->BigIncrements('id')->unsigned()->index();
            $table->string('bookingid');
            $table->string('bookingdetailid');
            $table->string('servicedeliverydate');
            $table->string('servicerequestdate');

            $table->string('paymentref');
            $table->string('bookingflag')->nullable();
            $table->string('userid');
            $table->string('username');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
