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
        Schema::create('sstock_brg', function (Blueprint $table) {
            $table->string('idx');
            $table->string('nama')->nullable();
            $table->string('jenis')->nullable();
            $table->string('merk')->nullable();
            $table->string('seri')->nullable();
            $table->string('stock')->nullable();
            $table->string('satuan')->nullable();
            $table->string('lokasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sstock_brg');
    }
};