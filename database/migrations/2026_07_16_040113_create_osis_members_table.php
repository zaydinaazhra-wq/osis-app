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
        Schema::create('osis_members', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('osis_class_id')->constrained('osis_classes')->onDelete('cascade');
            $table->foreignId('osis_departement_id')->constrained('osis_departements')->onDelete('cascade');
            $table->string('name');
            $table->string('position');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osis_members');
    }
};
