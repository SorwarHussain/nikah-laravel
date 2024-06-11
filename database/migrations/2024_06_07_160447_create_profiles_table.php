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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('weight');
            $table->string('bioType');
            $table->string('maritalStatus');
            $table->string('district');
            $table->string('upazila');
            $table->string('birthData');
            $table->string('skinColor');
            $table->string('height');
            $table->string('blood');
            $table->string('permAddress');
            $table->string('preAddress');
            $table->string('education');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('fatherOccupation');
            $table->string('motherOccupation');
            $table->string('brotherNum');
            $table->string('sisterNum');
            $table->string('brotherDetails')->nullable();
            $table->string('sisterDetails')->nullable();
            $table->string('uncle');
            $table->string('familyStatus');
            $table->string('familyDeen');
            $table->string('guardianNum');
            $table->string('guardian');
            $table->string('email');
            $table->string('number');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
