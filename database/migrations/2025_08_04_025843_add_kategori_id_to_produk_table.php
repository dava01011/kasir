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
        Schema::table('produk', function (Blueprint $table) {
            //menambahkan kategori_id ke tabel produk
            $table->unsignedBigInteger('kategori_id')->after('stok')->nullable();
            //menambahkan foreign key untuk kategori_id
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            //menghapus foreign key dan kolom kategori_id
            //menghapus foreign key terlebih dahulu sebelum menghapus kolom
            $table->dropForeign(['kategori_id']);
            //kemudian menghapus kolom kategori_id
            $table->dropColumn('kategori_id');
            
        });
    }
};
