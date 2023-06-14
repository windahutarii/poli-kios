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
        Schema::create('tb_pemiliks', function (Blueprint $table) {
            $table->id("id_pemilik");
            $table->string("nama_pemilik");
            $table->string("email");
            $table->string("alamat");
            $table->string("perusahaan");
            $table->string("no_hp");
            $table->string("no_wa");
            $table->string("foto");
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
        Schema::dropIfExists('tb_pemiliks');
    }
};
