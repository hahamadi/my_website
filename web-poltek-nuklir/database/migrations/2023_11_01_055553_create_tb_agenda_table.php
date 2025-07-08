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
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->dateTime("startdate_event");
            $table->dateTime("enddate_event");
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
