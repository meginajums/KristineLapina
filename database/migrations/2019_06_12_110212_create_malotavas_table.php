<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMalotavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malotavas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->length(200);
            $table->float('cena');
            $table->string('img_url');
            $table->text('apraksts');
            
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
        Schema::dropIfExists('malotavas');
    }
}
