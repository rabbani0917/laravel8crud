<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tahun');
            $table->integer('kecamatan_id')->index('fk_luas_perkebunan_kecamatan_idx');
            $table->integer('tanaman_perkebunan_id')->index('fk_luas_perkebunan_tanaman_perkebunan1_idx');
            $table->double('nilai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luas');
    }
}
