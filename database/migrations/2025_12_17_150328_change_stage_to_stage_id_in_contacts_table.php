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
        // 1) Add the new column
        Schema::table('contacts', function (Blueprint $table) {
            $table->foreignId('stage_id')
                ->nullable()
                ->after('id')
                ->constrained('contact_stages')
                ->nullOnDelete(); // same as ->onDelete('set null');
        });

        // 2) Drop the old 'stage' column (in a separate schema call)
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('stage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 1) Recreate the old 'stage' column (type as appropriate)
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('stage')->nullable()->after('id');
        });

        // 2) Drop the foreign key and the new column
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign(['stage_id']);
            $table->dropColumn('stage_id');
        });
    }
};
