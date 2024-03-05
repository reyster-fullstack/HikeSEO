<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('vehicle_model');
            $table->date('booking_date'); // Assuming you want to store just the date of booking
            // For storing the time of booking, assuming 'booking_time' should be a separate column
            $table->time('booking_time'); // Adjust according to your needs (e.g., datetime if you need date and time together)
            $table->timestamps(); // Correct way to add created_at and updated_at columns

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
