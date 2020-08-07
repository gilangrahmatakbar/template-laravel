<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarpertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentarpertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('isi');
            $table->date('tanggaldibuat');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profil');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
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
        Schema::dropIfExists('komentarpertanyaan');
    }
}
