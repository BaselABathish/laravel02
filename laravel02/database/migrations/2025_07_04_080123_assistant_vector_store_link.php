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
        Schema::create('assistant_vector_store_link', function (Blueprint $table) {
            $table->primary(['assistant_id', 'vector_store_id']);

            $table->foreignId('assistant_id')->constrained('assistants')->onDelete('cascade');
            $table->foreignId('vector_store_id')->constrained('vector_stores')->onDelete('cascade');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistant_vector_store_link');
        //
    }
};
