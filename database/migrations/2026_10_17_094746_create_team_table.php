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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->nullable()->constrained()->nullOnDelete();
            $table->string('city');
            $table->string('name')->unique();
            $table->string('abbreviation',4)->unique();
            $table->string('slug')->unique();
            $table->string('logo_url')->nullable();
            $table->string('stadium')->nullable();
            $table->unsignedSmallInteger('founded_year');
            $table->unsignedTinyInteger('championships')->default(0);
            $table->unsignedTinyInteger('super_bowl_titles')->default(0);
            $table->unsignedTinyInteger('super_bowl_appearances')->default(0);
            $table->unsignedTinyInteger('playoff_appearances')->default(0);
            $table->string('owner')->nullable();
            $table->string('head_coach')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
