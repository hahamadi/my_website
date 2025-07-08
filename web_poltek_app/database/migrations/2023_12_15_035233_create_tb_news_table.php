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
        Schema::create('tb_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid',100);
            $table->string('writer',500);
            $table->date('date');
            $table->string('title',1000);
            $table->string('highlight',1000);
            $table->string('content',1000);
            $table->dateTime('created_at', $precision = 0);
            $table->string('image',1000);
            $table->string('alias',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_news');
    }
};
