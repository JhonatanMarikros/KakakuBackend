<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->integer('jumlah');
            $table->string('gambar')->nullable();
            $table->unsignedBigInteger('claimed_by')->nullable()->after('gambar');
            $table->foreign('claimed_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropForeign(['claimed_by']);
            $table->dropColumn('claimed_by');
        });
    }
};
