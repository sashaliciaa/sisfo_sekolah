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
        Schema::create('tbl_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('absensi');
            $table->string('tugas');
            $table->string('uts');
            $table->date('uas');
            $table->text('total');
            $table->text('grade');
            $table->text('id_siswa');
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
        //
    }
};
