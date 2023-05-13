<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
                $table->id();
                $table->string('nim')->nullable();
                $table->string('nama')->nullable();
                $table->date('tanggal_lahir')->nullable();
                $table->string('tempat_lahir')->nullable();
                $table->text('alamat')->nullable();
                $table->text('email')->nullable();
                $table->string('nomer_telepon')->nullable();
                $table->string('gaji')->nullable();
                $table->enum('status', ['active','inactive'])->default('inactive');
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
        Schema::dropIfExists('karyawan');
    }
}
