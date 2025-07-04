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
        Schema::create('citoyens', function (Blueprint $table) {
            $table->id();
            $table->string('nom_cit');
            $table->string('pnom_ct');
            $table->string('email');
            $table->string('tel');
            $table->string('Pays');
            $table->string('ville_cit');
            $table->string('type_a');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citoyens');
    }
};
