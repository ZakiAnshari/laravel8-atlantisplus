<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->enum('jeniskelamin',['laki-laki','perempuan']); 
            $table->enum('agama',['islam','kristen','dll']);
            $table->enum('jenjangpendidikan',['smp','smk']);
            $table->string('emailsiswa'); 
            $table->string('namasekolahasal'); 
            $table->string('namaortu'); 
            $table->bigInteger('notelponsiswa');
            $table->bigInteger('notelponortu'); 
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
        Schema::dropIfExists('pendaftarans');
    }
}
