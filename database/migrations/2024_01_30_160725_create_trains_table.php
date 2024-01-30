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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->dateTime('partenza');
            $table->dateTime('arrivo');
            $table->smallInteger('codice_treno')->unsigned();
            $table->tinyInteger('n_carrozze')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('soppresso')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
