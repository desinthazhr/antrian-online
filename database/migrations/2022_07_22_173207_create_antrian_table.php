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
        Schema::create('antrian', function (Blueprint $table) {
            // $table->id_user();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('pengunjung');
            $table->string("kode_antrian", 50);
            $table->string("status", 50);
            $table->string("prediksi_waktu", 100);
            $table->string("layanan", 100);
            $table->string("no_antri", 5);
            $table->string("jenis_antrian", 50);
            $table->string("ukuran", 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian');
    }
};
