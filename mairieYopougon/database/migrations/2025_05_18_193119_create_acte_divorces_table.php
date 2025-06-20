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
        Schema::create('divorce', function (Blueprint $table) {
            $table->id();
            $table->string('num_reg_div', 5)->unique();

            $table->string('nom_exconj');
            $table->date('date_nais_exconj');
            $table->string('lieu_nais_exconj');
            $table->string('dom_exconj');

            $table->string('nom_exconjte');
            $table->date('date_nais_exconjte');
            $table->string('lieu_nais_exconjte');
            $table->string('dom_exconjte');

            $table->date('date_jug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divorce');
    }
};
