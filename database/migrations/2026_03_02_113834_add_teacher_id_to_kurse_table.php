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
            // add the new foreign key column
            $table->foreignId('teacher_id')
                  ->nullable()
                  ->constrained('teachers')
                  ->onDelete('cascade');

            // remove the old column if it still exists
            if (Schema::hasColumn('kurse', 'lehrer_id')) {
                $table->dropColumn('lehrer_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kurse', function (Blueprint $table) {
            // reverse the changes: drop teacher_id and restore lehrer_id
            if (Schema::hasColumn('kurse', 'teacher_id')) {
                $table->dropForeign(['teacher_id']);
                $table->dropColumn('teacher_id');
            }

            if (!Schema::hasColumn('kurse', 'lehrer_id')) {
                $table->string('lehrer_id');
            }
        });
    }
};
