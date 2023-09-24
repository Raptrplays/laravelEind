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
        Schema::create('coureurs', function (Blueprint $table) {
            $table->id('id');
            $table->string('Voornaam')->nullable(false);
            $table->string('Achternaam')->nullable(false);
            $table->string('Team')->nullable(false);
            $table->integer('Contract')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
