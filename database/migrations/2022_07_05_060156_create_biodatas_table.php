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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique()->nullable();
            $table->string('full_name')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->BigInteger('nik')->nullable();
            $table->string('ttl')->nullable();
            $table->text('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->string('tempat_tinggal')->nullable();
            $table->BigInteger('no_hp')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
};
