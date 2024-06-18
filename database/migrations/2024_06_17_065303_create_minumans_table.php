<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('minumans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('harga', 10, 2);
            $table->text('deskripsi');
            $table->string('gambar');
            $table->enum('kategori', ['Signature Coffee', 'Coffee Based', 'Hand Drip Coffee', 'Signature Mocktail', 'Treat Yourself', 'Non Coffee based','Tea Based']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('minumans');
    }
};
