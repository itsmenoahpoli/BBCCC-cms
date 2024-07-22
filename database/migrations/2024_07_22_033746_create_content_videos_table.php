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
        Schema::create('content_videos', function (Blueprint $table) {
            $table->id();
            $table->string('content_uid')->unique();
            $table->string('name')->unique();
            $table->string('name_slug')->unique();
            $table->string('file_dir');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_videos');
    }
};
