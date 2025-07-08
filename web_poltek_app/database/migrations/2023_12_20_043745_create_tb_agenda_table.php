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
        Schema::create('tb_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid', 20);
            $table->string('name', 1000);
            $table->string('description', 10000);
            $table->date('date_start');
            $table->date('date_end');
            $table->time('time', 0);
            $table->string('lnk_img', 1000);
            $table->string('location', 1000);
            $table->bigInteger('user_id');
            $table->dateTime('created_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_agenda');
    }
};
