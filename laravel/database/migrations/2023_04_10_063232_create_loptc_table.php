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
        Schema::create('loptc', function (Blueprint $table) {
            $table->id('MaLop');
            $table->string('HocKy');
            // $table->integer('NamSX');
            // $table->integer('ThoiLuong');
            $table->unsignedBigInteger('MaHP');
            $table->foreign('MaHP')->references('MaHP')->on('hocphan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loptc');
    }
};
