<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoc', function (Blueprint $table) {
            $table->id('id');

            $table->string('DiemQT');
            $table->string('DiemCK');
            $table->string('KetQua');

            $table->unsignedBigInteger('MaSV');
            $table->unsignedBigInteger('MaLop');
            $table->foreign('MaSV')->references('MaSV')->on('sinhvien');
            $table->foreign('MaLop')->references('MaLop')->on('loptc');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoc');
    }
};
