<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Create a new UUID 'uuid' column as the primary key
            $table->uuid('uuid')->primary()->after('id');

            // Drop the 'id' column
            $table->dropColumn('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('blogs', function (Blueprint $table) {
            // Revert the changes in the 'down' method if needed
            $table->id(); // Add back the 'id' column as a regular auto-incrementing primary key
            $table->dropPrimary('blogs_uuid_primary'); // Drop the primary key from 'uuid' column
            $table->dropColumn('uuid'); // Drop the 'uuid' column
        });
    }
};
