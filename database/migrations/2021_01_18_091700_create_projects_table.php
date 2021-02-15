<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('instansi');
            $table->string('email');
            $table->string('nomor_wa');
            $table->foreignId('jenis_proyek_id');
            $table->text('tujuan_pembuatan');
            $table->text('deskripsi');
            $table->dateTime('deadline');
            $table->string('desain')->nullable();
            $table->text('catatan')->nullable();
            $table->text('pertanyaan')->nullable();
            $table->timestamps();

            $table->foreign('jenis_proyek_id')->references('id')->on('jenis_proyeks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
