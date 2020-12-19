<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTenagaKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenaga_kerja', function (Blueprint $table) {
            $table->foreign('kecamatan_id', 'fk_luas_perkebunan_kecamatan000')->references('id')->on('kecamatan')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('tanaman_perkebunan_id', 'fk_luas_perkebunan_tanaman_perkebunan1000')->references('id')->on('tanaman')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenaga_kerja', function (Blueprint $table) {
            $table->dropForeign('fk_luas_perkebunan_kecamatan000');
            $table->dropForeign('fk_luas_perkebunan_tanaman_perkebunan1000');
        });
    }
}
