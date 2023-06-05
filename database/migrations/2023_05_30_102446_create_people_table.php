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
        Schema::create('people', function (Blueprint $table) {
            $table->string('id_people');
            $table->primary('id_people');
            $table->string('FullName');
            $table->string('UserName');
            $table->string('Password');
            $table->string('User_Group');
            $table->string('Telf');
            $table->string('Photo');
            $table->string('Country');
            $table->string('Regions');
            $table->string('city');
            $table->text('Address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
