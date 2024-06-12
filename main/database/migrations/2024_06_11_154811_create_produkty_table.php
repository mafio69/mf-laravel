<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produkty', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nazwa_produktu');
            $table->string('producent');
            $table->integer('actual')->nullable();
            $table->string('jednostka_ceny')->nullable();
            $table->float('waga')->nullable();
            $table->float('srednica')->nullable();
            $table->integer('dlugosc')->nullable();
            $table->integer('szerokosc')->nullable();
            $table->integer('wysokosc')->nullable();
            $table->float('grubosc')->nullable();
            $table->string('typ_pakowania')->nullable();
            $table->string('jednostki_zakupu')->nullable();
            $table->string('jednostki_magazynowe')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkty');
    }
};
