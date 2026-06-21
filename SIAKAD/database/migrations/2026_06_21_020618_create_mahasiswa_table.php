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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->char('npm', 10);
            $table->char('nidn', 10)->nullable();
            $table->string('nama', 50);
            $table->timestamps();

            $table->primary('npm');
            $table->foreign('nidn')->references('nidn')->on('dosen')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['nidn']);
        });
        Schema::dropIfExists('mahasiswa');
    }
};
