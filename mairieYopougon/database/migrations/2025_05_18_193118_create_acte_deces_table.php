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
        Schema::create('deces', function (Blueprint $table) {
            $table->id();
            $table->string('num_reg_dec', 5)->unique();
            $table->string('nom_def');
            $table->date('date_dec');
            $table->time('h_dec');
            $table->string('lieu_dec');
            $table->string('lieu_nais_def');
            $table->enum('sexe_def', ['masculin', 'féminin']);
            $table->string('nom_der_conj');
            $table->string('pnom_der_conj');
            $table->string('nom_p_def');
            $table->string('nom_m_def');
            $table->string('dom_def');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deces');
    }
};
