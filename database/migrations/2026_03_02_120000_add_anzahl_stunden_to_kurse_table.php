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
        Schema::table('kurse', function (Blueprint $table) {
            // number of hours for the course, default to 0 for existing rows
            $table->integer('anzahl_stunden')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kurse', function (Blueprint $table) {
            $table->dropColumn('anzahl_stunden');
        });
    }
};
