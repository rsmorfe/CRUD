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
            $table->id();
            $table->timestamps();
            $table->string('Surname')->nullable();
            $table->string('Middlename')->nullable();
            $table->string('Firstname')->nullable();
            $table->string('Bday')->nullable();
            $table->string('Age')->nullable();
            $table->string('Streetname')->nullable();
            $table->string('City')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('MobileNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('Fullname')->nullable();
            $table->string('emergencyMobileNumber')->nullable();
            $table->string('Relationship')->nullable();
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
