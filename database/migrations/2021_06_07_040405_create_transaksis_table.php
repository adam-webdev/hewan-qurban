<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pembeli_id')
        ->constrained('pembelis')
        ->onUpdate('cascade')
        ->onDelete('cascade');
        $table->foreignId('sapi_id')
        ->constrained('sapis')
        ->onUpdate('cascade')
        ->onDelete('cascade');
        $table->string('harga_jual',12);
        $table->string('down_payment',15)->nullable();
        $table->date('tanggal_pengiriman');
        $table->string('alamat_pengiriman',200);
        $table->enum('status',['Lunas','Belum Lunas']);
        $table->enum('status_kirim',['Belum Dikirim','Sedang Dikirim','Sudah Dikirim']);
        $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
