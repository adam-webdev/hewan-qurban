<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sapis', function (Blueprint $table) {
        $table->id();
        $table->string('kode_sapi',10);
        $table->string('jenis_sapi',50);
        $table->string('berat_sapi',10);
        $table->string('harga_beli',15);
        $table->string('harga_perkilo',15);
        $table->string('status');
        $table->integer('qty');
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
        Schema::dropIfExists('sapis');
    }
}
