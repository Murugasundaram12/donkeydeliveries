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
        Schema::create('site_views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('count')->default(53289);
        });

        // Insert initial row with 53289 count as requested
        DB::table('site_views')->insert([
            'count' => 53289,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_views');
    }
};
