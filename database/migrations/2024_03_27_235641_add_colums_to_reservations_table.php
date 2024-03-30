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
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('email');
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->date('date_in');
            $table->date('date_out');
            $table->foreignId('accommodation_id')->constrained()->onDelete('cascade');
            $table->text('reasons')->nullable();
            $table->foreignId('state_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('answer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropForeign(['room_id']);
            $table->dropColumn('room_id');
            $table->dropColumn('date_in');
            $table->dropColumn('date_out');
            $table->dropForeign(['accommodation_id']);
            $table->dropColumn('accommodation_id');
            $table->dropColumn('reasons');
            $table->dropForeign(['state_id']);
            $table->dropColumn('state_id');
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('answer');
        });
    }
};
