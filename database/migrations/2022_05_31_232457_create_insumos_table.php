<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('investimento', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tipo')->nullable();
            $table->string('valor')->nullable();
            $table->float('juros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('investimento');
    }
};
