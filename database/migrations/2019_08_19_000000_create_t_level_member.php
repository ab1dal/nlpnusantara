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
        Schema::create('t_level_member', function (Blueprint $table) {
            $table->id(lm_index);
            $table->string('uuid');
            $table->string('lm_nama_member');
            $table->string('lm_jenis_sertif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_level_member');
    }
};
