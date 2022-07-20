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
        Schema::create('t_jadwal_training', function (Blueprint $table) {
            $table->id('tr_index');
            $table->string('tr_nama');
            $table->string('tr_tgl');
            $table->string('tr_nama_trainer');
            $table->timestamp()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_jadwal_training');
    }
};
