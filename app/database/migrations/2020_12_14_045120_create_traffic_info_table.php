<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrafficInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_info', function (Blueprint $table) {			
            $table->bigIncrements('id')->unique();
            $table->bigInteger('user_employee_number');
            $table->char('traffic_type', 4);
            $table->char('traffic_billing_destination', 3);
            $table->string('traffic_departure_station',30);
            $table->string('traffic_arrival_station', 30);
            $table->integer('traffic_travel_costs');
            $table->date('traffic_used_date');
            $table->string('traffic_workplace', 30);
            $table->text('traffic_user_comments');
            $table->integer('traffic_request_status')->default(1);;
            $table->timestamps();

            $table->foreign('user_employee_number')->references('user_employee_number')->on('user_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traffic_info');
    }
}
