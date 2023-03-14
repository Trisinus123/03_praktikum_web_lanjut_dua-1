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
        Schema::create('profile', function (Blueprint $table) {
            $table->id('id_profil');
            $table->string('nama', 50);
            $table->string('slug', 100);
            $table->string('pendidikan', 100);
            $table->string('kelas', 10);
            $table->string('absen', 15);
            $table->string('nim', 50);
            $table->string('nohp', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
};
