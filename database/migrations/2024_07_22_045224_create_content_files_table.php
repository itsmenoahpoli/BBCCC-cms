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
        Schema::create('content_files', function (Blueprint $table) {
            $table->id();
            $table->string('content_uid')->unique();
            $table->string('category')->nullable();
            $table->string('name')->unique();
            $table->string('name_slug')->unique();
            $table->string('file_src');
            $table->enum('status', ['draft', 'published', 'archived']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_files');
    }
};
