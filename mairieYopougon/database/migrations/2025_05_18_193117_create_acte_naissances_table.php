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
        Schema::create('naissance', function (Blueprint $table) {
            $table->id();
            $table->string('num_reg_nais', 5)->unique();
            $table->string('nom_enf');
            $table->string('pnom_enf');
            $table->enum('sexe_enf', ['masculin', 'féminin']);
            $table->date('date_nais');
            $table->string('lieu_nais');
            $table->time('h_nais_enf');
            $table->string('nom_pnom_pere');
            $table->string('nom_pnom_mere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naissance');
    }
};
