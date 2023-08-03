<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mobil');
            $table->string('durasi_sewa', 100);
            $table->string('jumlah_biaya', 100);
            $table->unsignedBigInteger('id_pengguna');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_mobil')->references('id')->on('management');
            $table->foreign('id_pengguna')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian_mobil');
    }
};
