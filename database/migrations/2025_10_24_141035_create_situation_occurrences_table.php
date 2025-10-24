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
        Schema::create('situation_occurrences', static function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->foreignUuid('situation_uuid')->references('uuid')->on('situations')->cascadeOnDelete();
            $table->foreignUuid('reported_by_user_uuid')->nullable()->references('uuid')->on('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('situation_occurrences');
    }
};
