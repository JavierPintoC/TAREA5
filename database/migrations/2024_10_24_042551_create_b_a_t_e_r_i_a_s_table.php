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
        Schema::create('b_a_t_e_r_i_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo');
            $table->string('Capacidad');
            $table->string('Voltaje');
            $table->string('Uso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_a_t_e_r_i_a_s');
    }
};
