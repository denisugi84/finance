<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance', function (Blueprint $table) {
            $table->id();
            $table->string('noKas');
            $table->string('noRef');
            $table->timestamp('tglInput');
            $table->date('tglTransaksi');
            $table->text('uraian');
            $table->integer('debet');
            $table->integer('kredit');
            $table->text('namaPihak');
            $table->string('jenis');
            $table->string('kdBiaya');
            $table->string('akun');
            $table->integer('idUser');
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
        Schema::dropIfExists('finance');
    }
}
