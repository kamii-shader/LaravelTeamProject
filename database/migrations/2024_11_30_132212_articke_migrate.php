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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul artikel
            $table->string('uuid'); // UUID
            $table->string('author'); // Nama penulis
            $table->date('publish_date'); // Tanggal artikel
            $table->string('images')->nullable(); // URL gambar (opsional)
            $table->longText('content'); // Isi artikel
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
