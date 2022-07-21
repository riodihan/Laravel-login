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
        Schema::create('tb_proyek', function (Blueprint $table) {
            $table->id('proyek_id');
            $table->string('proyek_name')->unique();
            $table->string('proyek_year');
            $table->string('proyek_category');
            $table->string('proyek_desc');
            $table->string('proyek_pict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_proyek');
    }
};
