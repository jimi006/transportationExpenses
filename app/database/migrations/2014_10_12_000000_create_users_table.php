<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('user_employee_number')->unique();
            $table->string('user_name');
            $table->string('user_kana');
            $table->char('user_gender', 2);
            $table->string('user_mail')->unique();
            $table->string('user_department', 30);
            $table->string('user_category', 30);
            $table->string('user_position',30);
            $table->string('user_password');
            $table->string('user_nearest_station', 30);
            $table->string('user_office_station', 30);
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
        Schema::dropIfExists('user_info');
    }
}
