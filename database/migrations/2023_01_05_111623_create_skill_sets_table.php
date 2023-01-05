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
        Schema::create('skill_sets', function (Blueprint $table) {
            $table->integer('candidates_id');
            $table->integer('skill_id');
            $table->primary(['candidates_id', 'skill_id']);         
            $table->foreignId('candidates_id')->constrained('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('skill_id')->constrained('jobs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_sets');
    }
};
