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
        Schema::create('tb_kios', function (Blueprint $table) {
            $table->id("id_kios");
            $table->unsignedBigInteger("id_pemilik");
            $table->foreign("id_pemilik")->references("id_pemilik")->on("tb_pemiliks")->onDelete("cascade");
            $table->string("nama_kios");
            $table->string("alamat");
            $table->string("deskripsi");
            $table->string("sertifikat");
            $table->float("luas_tanah");
            $table->float("luas_bangunan");
            $table->string("lantai");
            $table->string("wastafel");
            $table->string("kamar_mandi");
            $table->string("wifi");
            $table->string("foto_kios");
            $table->integer("status_terjual");
            $table->integer("harga_jual");
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
        Schema::dropIfExists('tb_kios');
    }
};
