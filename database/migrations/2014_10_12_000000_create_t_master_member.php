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
        Schema::create('t_master_member', function (Blueprint $table) {
            $table->id('mm_index');
            $table->string('mm_nama');
            $table->string('mm_alm_alamat');
            $table->string('mm_alm_kota');
            $table->string('mm_alm_prov');
            $table->string('mm_alm_negara');
            $table->string('mm_no-hp');
            $table->string('mm_email')->unique();
            $table->timestamp()->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('t_master_member');
    }
};
