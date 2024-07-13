<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchDurationsTable extends Migration
{
    public function up()
    {
        Schema::create('watch_durations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->integer('duration_minutes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('watch_durations');
    }
}
