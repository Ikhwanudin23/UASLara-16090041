<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nama_event');
            $table->date('tanggal_pelaksanaan');
            $table->string('tempat');
            $table->string('link_registrasi');
            $table->string('contact_person');
            $table->text('deskripsi');
            $table->text('persyaratan');
            $table->integer('id_kategori')->unsigned();
            $table->enum('status', ['1', '0']);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('events');
    }
}
