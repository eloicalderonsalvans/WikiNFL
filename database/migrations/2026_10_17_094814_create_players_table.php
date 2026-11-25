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
        Schema::table('players', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained()->nullOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position', 5)->index();
            $table->unsignedTinyInteger('jersey_number')->nullable();
            $table->string('college')->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedSmallInteger('draft_year')->nullable();
            $table->string('status', 20)->default('active');
            $table->string('photo_url')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }
};
