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
            $table->text("deskripsi")->nullable();
            $table->string("sertifikat");
            $table->float("luas_tanah");
            $table->float("luas_bangunan");
            $table->integer("lantai");
            $table->integer("wastafel")->nullable();
            $table->integer("parkir")->nullable();
            $table->integer("kamar_mandi")->nullable();
            $table->boolean("wifi")->default(0);
            $table->string("foto_kios")->nullable();
            $table->boolean("status_terjual")->default(0);
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
