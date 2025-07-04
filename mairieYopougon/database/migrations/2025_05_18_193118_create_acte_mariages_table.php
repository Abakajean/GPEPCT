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
        Schema::create('mariage', function (Blueprint $table) {
            $table->id();
            $table->string('num_reg_mar', 5)->unique();

            // Informations sur l'époux
            $table->string('nom_ep');
            $table->string('Nom_pere_ep');
            $table->string('nom_m_ep');
            $table->date('date_nais_ep');
            $table->string('lieu_nais_ep');
            $table->string('dom_ep');
 
            // Informations sur l'épouse
            $table->string('nom_eps');
            $table->string('nom_p_eps');
            $table->string('nom_m_eps');
            $table->date('date_nais_eps');
            $table->string('lieu_nais_eps');
            $table->string('dom_eps');

            // Informations sur le mariage
            $table->date('date_mar');
            $table->time('h_mar')->nullable();
            $table->string('type_reg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mariage');
    }
};
