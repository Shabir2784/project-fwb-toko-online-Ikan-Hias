<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan_produk', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pesanan_id')->constrained('pesanans')->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produks')->onDelete('cascade');

            $table->integer('jumlah');
            $table->decimal('harga_satuan', 10, 2);
            $table->decimal('subtotal', 10, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan_produk');
    }
};
