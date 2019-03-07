<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->string('id_film', 100);
            $table->string('nama_pelanggan',100);
            $table->double('no_ktp');
            $table->date('tgl_pinjaman');
            $table->date('tgl_kembali');
            $table->double('harga');
            $table->char('status',100);
            $table->timestamp('tgl_input');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
