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
       Schema::create('produk', function (Blueprint $table) {
           $table->Increments('id');
           $table->string('nama_produk');
           $table->text('informasi_produk');
           $table->string('image',255);
           $table->integer('harga_produk');  
           $table->string('map');
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }

};
