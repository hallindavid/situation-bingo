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
        Schema::create('card_situations', static function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->uuid('card_uuid');
            $table->unsignedTinyInteger('card_position');
            $table->uuid('situation_uuid')->nullable();
            $table->uuid('situation_occurrence_uuid')->nullable();

            $table->foreign('card_uuid')->references('uuid')->on('cards')->cascadeOnDelete();
            $table->foreign('situation_uuid')->references('uuid')->on('situations')->nullOnDelete();
            $table->foreign('situation_occurrence_uuid')->references('uuid')->on('situation_occurrences')->nullOnDelete();

            $table->unique(['card_uuid', 'situation_uuid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_situations');
    }
};
