<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_detail', function (Blueprint $table) {
            $table->BigIncrements('id')->unsigned()->index();
            $table->string('bookingid');

            $table->string('serviceid');
            $table->string('servicename');
            $table->string('paymenttype');

            $table->float('bookingcost', 15,2)->nullable;
            $table->float('servicecost', 15,2)->nullable;

            $table->string('userid');
            $table->string('username');
            $table->string('usercontact');
            $table->string('serviceflag')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_detail');
    }
}
